<?php
// +----------------------------------------------------------------------
// | QinfoCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.qinfo360.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <register@qinfo360.com> <http://www.qinfo360.com>
// +----------------------------------------------------------------------

namespace app\api\controller;
use app\common\controller\Base;
use app\device\model\Device;

class Index extends Base{

	public function monitor(){
		$Monitor = model('monitor');
			$is_constantly = true; // �Ƿ���ʵʱ��Ϣ, false - �ر�, true - ����
		
			$serivce['getServerHosts'] = get_current_user() . '/' . filter_input(INPUT_SERVER, 'SERVER_NAME') . '(' . gethostbyname(filter_input(INPUT_SERVER, 'SERVER_NAME')) . ')'; // ��ȡ����������/ip
			$serivce['getServerOS'] = PHP_OS . ' ' . php_uname('r'); // ��ȡ����������ϵͳ
			$serivce['getServerSoftWare'] = filter_input(INPUT_SERVER, 'SERVER_SOFTWARE'); // ��ȡ���������ͺͰ汾
			$serivce['getServerHostName'] = php_uname('n'); // ��ȡ������������
			// �жϲ���ϵͳƽ̨
			switch (PHP_OS)
			{
				case "Linux":
					$svrShow = (false !== $is_constantly) ? ((false !== ($svrInfo = $Monitor->svr_linux())) ? "show" : "none") : "none";
					$svrInfo = array_merge($svrInfo, $Monitor->linux_Network());
					$all_disk = $Monitor->linux_disk();
					break;
				case "FreeBSD":
					$svrShow = (false !== $is_constantly) ? ((false !== ($svrInfo = $Monitor->svr_freebsd())) ? "show" : "none") : "none";
					$svrInfo = array_merge($svrInfo, $this->freebsd_Network());
					break;
				case "Darwin":
					$svrShow = (false !== $is_constantly) ? ((false !== ($svrInfo = $Monitor->svr_darwin())) ? "show" : "none") : "none";
					$svrInfo = array_merge($svrInfo, $this->darwin_Network());
					break;
				case "WINNT":
					$is_constantly = true;
					$svrShow = (false !== $is_constantly) ? ((false !== ($svrInfo = $Monitor->svr_winnt())) ? "show" : "none") : "none";
					$all_disk = $Monitor->win_disk();
					break;
				default :
					break;
			}
			if($is_constantly)
			{
				$currentTime = date("Y-m-d H:i:s");
				$uptime = $svrInfo['uptime'];
			}
			$res = array(
				'currentTime' => $currentTime,
				'uptime' => $uptime,
				'cpuPercent' => $svrInfo['cpu']['percent'],
				'MemoryTotal' => $svrInfo['mTotal'],
				'MemoryUsed' => $svrInfo['mUsed'],
				'MemoryFree' => $svrInfo['mFree'],
				'MemoryPercent' => $svrInfo['mPercent'],
				'MemoryCachedPercent' => $svrInfo['mCachedPercent'],
				'MemoryCached' => $svrInfo['mCached'],
				'MemoryRealUsed' => $svrInfo['mRealUsed'],
				'MemoryRealFree' => $svrInfo['mRealFree'],
				'MemoryRealPercent' => $svrInfo['mRealPercent'],
				'Buffers' => $svrInfo['mBuffers'],
				'SwapTotal' => $svrInfo['swapTotal'],
				'SwapFree' => $svrInfo['swapFree'],
				'SwapUsed' => $svrInfo['swapUsed'],
				'SwapPercent' => $svrInfo['swapPercent']
			);
			
			if($svrInfo['nBool'])
			{
				$res['Network'] = $svrInfo['net'];
			}
			if($all_disk){
				foreach($all_disk as $speckey => $specvar){
					$disk_info['hddName'][$speckey] = $speckey;
					$disk_info['hddTotal'][$speckey] = $specvar['hddTotal'];
					$disk_info['hddFree'][$speckey] = $specvar['hddFree'];
					$disk_info['hddUsed'][$speckey] = $specvar['hddTotal'] - $specvar['hddFree'];
					$disk_info['hddFreePercent'][$speckey] = (floatval($specvar['hddTotal'])!=0) ? round($disk_info['hddFree'][$speckey]/$specvar['hddTotal'] * 100, 2) : 0;
					$disk_info['hddUsedPercent'][$speckey] = (floatval($specvar['hddTotal'])!=0) ? round($disk_info['hddUsed'][$speckey]/$specvar['hddTotal'] * 100, 2) : 0;
					$disk_index[$speckey]['hddTotal'] = $disk_info['hddTotal'][$speckey];
					$disk_index[$speckey]['hddFree'] = $disk_info['hddFree'][$speckey];
					$disk_index[$speckey]['hddUsed'] = $disk_info['hddUsed'][$speckey];

				}
				if($disk_info){
					foreach($disk_info as $diskckey => $diskvar){
						$disk_info[$diskckey] = array_values($diskvar);
					}
				}
			}
			
			$res['serivce'] = $serivce;
			$res['svrinfo'] = $svrInfo;
			$res['disk_info'] = $disk_info;
			$res['all_disk'] = $disk_index;
			
			$jsonRes = json_encode($res);
			
			return json($res);
	}



	public function get_more_info(){

		$device_id = input('device_id');
		if($device_id){

			$info =	Device::getDeviceMoreInfo($device_id);
			return json($info);
		}

		return array();
	}


}
