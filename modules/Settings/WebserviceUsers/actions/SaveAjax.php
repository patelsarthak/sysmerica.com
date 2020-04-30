<?php

/**
 * Save Application.
 *
 * @copyright YetiForce Sp. z o.o
 * @license YetiForce Public License 3.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author Radosław Skrzypczak <r.skrzypczak@yetiforce.com>
 */
class Settings_WebserviceUsers_SaveAjax_Action extends Settings_Vtiger_Save_Action
{
	/**
	 * Save.
	 *
	 * @param \App\Request $request
	 */
	public function process(App\Request $request)
	{
		$typeApi = $request->getByType('typeApi', 'Alnum');
		if (!$request->isEmpty('record')) {
			$recordModel = Settings_WebserviceUsers_Record_Model::getInstanceById($request->getInteger('record'), $typeApi);
		} else {
			$recordModel = Settings_WebserviceUsers_Record_Model::getCleanInstance($typeApi);
		}
		$recordModel->setDataFromRequest($request);

		try {
			if ($response = $recordModel->checkData()) {
				$result = ['success' => false, 'message' => \App\Language::translate($response, $request->getModule(false))];
			} else {
				$recordModel->save();
				$result = ['success' => true];
			}
		} catch (\Exception $e) {
			$result = ['success' => false, 'message' => \App\Language::translate('ERR_NOT_ALLOWED_VALUE')];
		}

		$response = new Vtiger_Response();
		$response->setResult($result);
		$response->emit();
	}
}
