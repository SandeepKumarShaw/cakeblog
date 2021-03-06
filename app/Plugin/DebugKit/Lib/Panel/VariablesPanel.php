<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('DebugPanel', 'DebugKit.Lib');

/**
 * Provides debug information on the View variables.
 */
class VariablesPanel extends DebugPanel {

/**
 * beforeRender callback
 *
 * @param Controller $controller Controller object.
 * @return array
 */
	public function beforeRender(Controller $controller) {
		$viewVars = $controller->viewVars;
		unset(
			$viewVars['debugToolbarPanels'],
			$viewVars['debugToolbarJavascript'],
			$viewVars['debugToolbarCss']
		);
		return array_merge($viewVars, array('$request->data' => $controller->request->data));
	}
}
