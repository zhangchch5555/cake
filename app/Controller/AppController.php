<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    //public $prefixDir = '';

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->layout = 'layout';
        //$this->__autoRender();
    }

    protected function __autoRender($path = false)
    {

        if ($path) {
            $this->render($path);
        } else {
            $this->render();
        }
        return;

        // prefixDirの階層をつなげる
        $comp_prefixDir = str_replace(DS, '', $this->prefixDir);

        $render_path = '';
        // path指定あり
        if ($path) {
            $render_path = $path;
        } // path指定なし
        else {
            // controller + action
            $render_path = $this->name . DS . $this->action;
        }

        // 先頭にDSがついていたらサブティレクトリは無視
        if (strpos($render_path, DS) !== 0) {
            // サブディレクトリ指定
            if ($this->prefixDir) {
                $tmp_path = str_replace($comp_prefixDir . DS, '', $render_path);
                $render_path = $this->prefixDir . DS . $tmp_path;
            }
        }

        // 先頭のDSはなし
        $render_path = trim($render_path, DS);

        $this->render($render_path);
    }
}
