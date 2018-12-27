<?php
  use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Result Management';
?>

<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>HOD</h3>
    <ul class="nav side-menu">
      <li><a><i class="glyphicon glyphicon-book"></i> Manage Courses<span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><?= Html::a("Add", ['site/add-courses']) ?></li>
          <li><?= Html::a("consult",['site/consult-courses']) ?></li>
        </ul>
      </li>
      <li><a><i class="glyphicon glyphicon-education iconColor "></i> Manage Student <span class="fa fa-chevron-down"></span></a>
     <ul class="nav child_menu">
          <li><?= Html::a("Add-student", ['site/add-student']) ?></li>
          <li><?= Html::a("consult-student", ['site/consult-student']) ?></li>

          
        </ul>
      </li>
      <li><a><i class="fa fa-windows "></i> Manage Levels <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><?= Html::a("Add-levels", ['site/add-levels']) ?></li>
          <li><?= Html::a("Consult-levels", ['site/consult-levels']) ?></li>

         
        </ul>

      <li><a><i class="fa fa-sitemap   "></i> Manage Speciality <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><?= Html::a("add-speciality", ['site/add-speciality']) ?></li>
          <li><?= Html::a("consult-speciality", ['site/consult-speciality']) ?></li>

          
          
          
        </ul>
      </li> 
      <li><a><i class="fa fa-bar-chart-o "></i> Manage Results <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
            
            <li><?= Html::a("Semester Results",['site/semester-results'])?></li>
            <li><?= Html::a("statistics",['site/statistics']) ?>
        </ul>
            
          
            
        
      </li>                 
      <li><a href="javascript:void(0)"><i class="fa fa-comments"></i> live  chat <span class="label label-success pull-right">Coming Soon</span></a></li>
    </ul>
  </div>

</div>
<!-- /sidebar menu -->