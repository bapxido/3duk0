<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>
<aside class="main-sidebar">

    <section class="sidebar">
		
		<?php if (!(Yii::$app->user->isGuest)) { ?>
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="./images/photo.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <?php } ?>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

     
	<?php if (Yii::$app->user->isGuest) { ?>
	<ul class="sidebar-menu">
		<li><a href="?r=site%2Findex"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
		<li><a href="?r=site%2Fabout"><i class="fa fa-comment"></i><span>About</span></a></li>
		<li><a href="?r=site%2Fcontact"><i class="fa fa-envelope"></i><span>Contact</span></a></li>
		<li><?= Html::a('<i class="fa fa-sign-up"></i><span>Student</span>', ['site/signup'] ) ?></li>
		<li><a href="?r=site%2Flogin"><i class="fa fa-lock"></i><span>Login</span></a></li>
	</ul>
	<?php } else { ?>
	<ul class="sidebar-menu">
		<li><?= Html::a('<i class="fa fa-dashboard"></i><span>Dashboard</span>', ['site/dashboard'], ['class' => 'dashboard']) ?></li>
		<li class="treeview"><?= Html::a('<i class="fa fa-group treeview"></i><span>Operations</span> <i class="fa fa-angle-left pull-right"></i>', ['']) ?>
			<ul class="treeview-menu">
				<li><?= Html::a('<i class="fa fa-graduation-cap"></i><span>Student</span>', ['student/index'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-group"></i><span>Staff Member</span>', ['staff-member/index']) ?></li>
				<li><?= Html::a('<i class="fa fa-building"></i><span>Faculty Management</span></a>', ['faculty/index']) ?></li>
				<li><?= Html::a('<i class="fa fa-book"></i><span>Course Management</span>', ['class-subject-header/index'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-retweet"></i><span>Student Support & Welfare</span>', ['guidance-counselling/index'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-calendar"></i><span>Attendance Register</span>', ['attendance-general/index'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-book"></i><span>Gradebook</span>', ['test-exam-marks/index'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-book"></i><span>Bulletin</span>', ['bulletin/index'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-book"></i><span>Events Calendar</span>', ['events-calendar/index'] ) ?></li>
			</ul>		
		</li>
<!--
		<li class="treeview"><a class="settings" href="?r=site%2Fsettings" ><i class="fa fa-cog"></i><span>Settings</span><i class="fa fa-angle-left pull-right"></i></a>
-->
		<li class="treeview"><?= Html::a('<i class="fa fa-cog"></i><span>Settings</span><i class="fa fa-angle-left pull-right"></i>', ['site/settings'],['class' =>'settings']) ?>
			<ul class="treeview-menu">
				<li><?= Html::a('<i class="fa fa-exchange"></i><span>Relationship</span>', ['relationship/index'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-globe"></i><span>Country</span>', ['country/index'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-flag"></i><span>Nationality</span>', ['nationality'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-wheelchair"></i><span>Special Needs</span>', ['special-need/index'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-transgender"></i><span>Title</span>', ['staff-title/index'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-user-plus"></i><span>Staff Type</span>', ['staff-type/index'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-certificate"></i><span>Qualifications</span>', ['qualification/index'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-ticket"></i><span>Course Type</span>', ['course-type/index'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-tags"></i><span>Subject Type</span>', ['subject-type/index'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-calendar"></i><span>Academic Period</span>', ['academic-period/index'] ) ?></li>
				
				<li><?= Html::a('<i class="fa fa-globe"></i><span>Day Type</span>', ['day-type/index'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-money"></i><span>School Fees Master</span>', ['school-fees-master/index'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-credit-card"></i><span>Payment Method</span>', ['payment-method/index'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-arrows"></i><span>Guidance Counselling Category</span>', ['guidance-counselling-category/index'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-print"></i><span>Class Test Type</span>', ['class-test-type/index'] ) ?></li>
				<li><?= Html::a('<i class="fa fa-plane"></i><span>Class Type</span>', ['class-test/index'] ) ?></li>
			</ul>
		</li>
		<li><?= Html::a('<i class="fa fa-comment"></i><span>About</span>', ['site/about'] ) ?></li>
		<li><?= Html::a('<i class="fa fa-envelope"></i><span>Contact</span>', ['site/contact'] ) ?></li>

<!--
		<li><a href="?r=site%2Flogout" data-method="post"><i class="fa fa-unlock"></i><span>Logout (<?= Yii::$app->user->identity->username ?>)</span></a></li>
-->
		<li><?= Html::a('<i class="fa fa-unlock"></i><span>Logout ('. Yii::$app->user->identity->username .')</span>', ['site/logout'], ['data-method'=>'post'] ) ?></li>
	</ul>
	<?php } ?>
	
    </section>

</aside>
