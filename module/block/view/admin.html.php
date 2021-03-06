<?php
/**
 * The admin view file of block module of RanZhi.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     block
 * @version     $Id$
 * @link        http://www.ranzhico.com
 */
?>
<?php
$webRoot = $this->app->getWebRoot();
$jsRoot  = $webRoot . "js/";
include '../../common/view/chosen.html.php';
?>
<?php if(isset($pageCSS)) css::internal($pageCSS); ?>
<form class="form-horizontal load-indicator" id="blockAdminForm" method='post' target='hiddenwin'>
  <div class="form-group">
    <label for="modules" class="col-sm-3"><?php echo $lang->block->lblModule;?></label>
    <div class="col-sm-7">
      <?php
      $moduleID = '';
      if($block) $moduleID = $block->source != '' ? $block->source : $block->block;
      ?>
      <?php echo html::select('modules', $modules, $moduleID, "class='form-control chosen'")?>
    </div>
  </div>

  <!-- #blockParams 用于动态加载区块设置参数 -->
  <div id="blocksList"><?php if(!empty($blocks)) echo $blocks;?></div>

  <!-- #blockParams 用于动态加载区块设置参数 -->
  <div id="blockParams"></div>

  <div class="form-group form-actions">
    <div class="col-sm-7 col-sm-offset-3">
      <button type="submit" class="btn btn-wide btn-primary">保存</button> &nbsp;
      <button type="cancel" class="btn btn-wide btn-gray" data-dismiss="modal">取消</button>
    </div>
  </div>
</form>
<?php js::set('blockID', $blockID)?>
<?php if(isset($pageJS)) js::execute($pageJS);?>
