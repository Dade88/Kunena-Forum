<?php
/**
 * Kunena Component
 * @package Kunena.Administrator.Template
 * @subpackage CPanel
 *
 * @copyright (C) 2008 - 2015 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined('_JEXEC') or die ();

/** @var KunenaAdminViewCpanel $this */
?>

<div id="kunena" class="admin override">
	<div id="j-sidebar-container" class="span2">
		<div id="sidebar">
			<div class="sidebar-nav"><?php include KPATH_ADMIN . '/template/joomla30/common/menu.php'; ?></div>
		</div>
	</div>
	<div id="j-main-container" class="span10">
		<section class="content-block" role="main">
			<div class="row-fluid">
				<div class="span7">
					<div class="well well-small">
						<div class="module-title nav-header"><?php echo JText::_('COM_KUNENA_CPANEL_DESC_WELCOME') ?></div>
						<hr class="hr-condensed">
						<div id="dashboard-icons" class="btn-group">
							<a class="btn" href="index.php?option=com_kunena&view=categories">
								<img src="components/com_kunena/media/icons/large/categories.png" alt="<?php echo JText::_('COM_KUNENA_CPANEL_LABEL_CATEGORIES') ?>"/><br/>
								<span><?php echo JText::_('COM_KUNENA_CPANEL_LABEL_CATEGORIES') ?></span>
							</a>
							<a class="btn" href="index.php?option=com_kunena&view=users">
								<img src="components/com_kunena/media/icons/large/users.png" alt="<?php echo JText::_('COM_KUNENA_CPANEL_LABEL_USERS') ?>"/><br/>
								<span><?php echo JText::_('COM_KUNENA_CPANEL_LABEL_USERS') ?></span>
							</a>
							<a class="btn" href="index.php?option=com_kunena&view=attachments">
								<img src="components/com_kunena/media/icons/large/files.png" alt="<?php echo JText::_('COM_KUNENA_CPANEL_LABEL_FILES') ?>"/><br/>
								<span><?php echo JText::_('COM_KUNENA_CPANEL_LABEL_FILES') ?></span>
							</a>
							<a class="btn" href="index.php?option=com_kunena&view=smilies">
								<img src="components/com_kunena/media/icons/large/smileys.png" alt="<?php echo JText::_('COM_KUNENA_CPANEL_LABEL_EMOTICONS') ?>"/><br/>
								<span><?php echo JText::_('COM_KUNENA_CPANEL_LABEL_EMOTICONS') ?></span>
							</a>
							<a class="btn" href="index.php?option=com_kunena&view=ranks">
								<img src="components/com_kunena/media/icons/large/ranks.png" alt="<?php echo JText::_('COM_KUNENA_CPANEL_LABEL_RANKS') ?>"/><br/>
								<span><?php echo JText::_('COM_KUNENA_CPANEL_LABEL_RANKS') ?></span>
							</a>
							<a class="btn" href="index.php?option=com_kunena&view=templates">
								<img src="components/com_kunena/media/icons/large/templates.png" alt="<?php echo JText::_('COM_KUNENA_CPANEL_LABEL_TEMPLATES') ?>"/><br/>
								<span><?php echo JText::_('COM_KUNENA_CPANEL_LABEL_TEMPLATES') ?></span>
							</a>
							<a class="btn" href="index.php?option=com_kunena&view=config">
								<img src="components/com_kunena/media/icons/large/prune.png" alt="<?php echo JText::_('COM_KUNENA_CPANEL_LABEL_CONFIG') ?>"/><br/>
								<span><?php echo JText::_('COM_KUNENA_CPANEL_LABEL_CONFIG') ?></span>
							</a>
							<a class="btn" href="index.php?option=com_kunena&view=plugins">
								<img src="components/com_kunena/media/icons/large/pluginsmanager.png" alt="<?php echo JText::_('COM_KUNENA_CPANEL_LABEL_PLUGINS') ?>"/><br/>
								<span><?php echo JText::_('COM_KUNENA_CPANEL_LABEL_PLUGINS') ?></span>
							</a>
							<a class="btn" href="index.php?option=com_kunena&view=tools">
								<img src="components/com_kunena/media/icons/large/config.png" alt="<?php echo JText::_('COM_KUNENA_CPANEL_LABEL_TOOLS') ?>"/><br/>
								<span><?php echo JText::_('COM_KUNENA_CPANEL_LABEL_TOOLS') ?></span>
							</a>
							<a class="btn" href="index.php?option=com_kunena&view=trash">
								<img src="components/com_kunena/media/icons/large/trash.png" alt="<?php echo JText::_('COM_KUNENA_CPANEL_LABEL_TRASH') ?>"/><br/>
								<span><?php echo JText::_('COM_KUNENA_CPANEL_LABEL_TRASH') ?></span>
							</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="well well-small">
						<div class="module-title nav-header"><?php echo JText::_('COM_KUNENA_CPANEL_LABEL_GETTINGSTARTED') ?></div>
						<hr class="hr-condensed">
						<ul class="pull-left">
							<li><i class="icon icon-question"></i> <a href="http://docs.kunena.org/index.php/K_2.0_Installation_Guide" target="_blank"><?php echo JText::_('COM_KUNENA_CPANEL_DESC_HOWTOSETUP') ?> </a></li>
							<li><i class="icon icon-question"></i> <a href="http://www.kunena.org/docs/Sections,_Categories,_sub-Categories_(Part_1)" target="_blank"><?php echo JText::_('COM_KUNENA_CPANEL_DESC_CATEGORIES') ?> </a></li>
							<li><i class="icon icon-question"></i> <a href="http://www.kunena.org/forum" target="_blank"><?php echo JText::_('COM_KUNENA_CPANEL_DESC_SUPPORT') ?> </a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>

				<div class="span5">
					<div class="well well-small">
						<div class="center">
							<img src="components/com_kunena/media/icons/kunena_logo.png"/>
						</div>
						<dl class="dl-horizontal">
							<hr class="hr-condensed">
							<dt><?php echo JText::_('COM_KUNENA_CPANEL_LABEL_VERSION') ?>:</dt>
							<dd><?php echo KunenaForum::version(); ?></dd>
							<hr class="hr-condensed">
							<dt><?php echo JText::_('COM_KUNENA_CPANEL_LABEL_CODENAME') ?>:</dt>
							<dd><?php echo KunenaForum::versionName(); ?></dd>
							<hr class="hr-condensed">
							<dt><?php echo JText::_('COM_KUNENA_CPANEL_LABEL_DATE') ?>:</dt>
							<dd><?php echo KunenaForum::versionDate(); ?></dd>
							<hr class="hr-condensed">
							<dt><?php echo JText::_('COM_KUNENA_CPANEL_LABEL_AUTHOR') ?>:</dt>
							<dd><a href="http://www.kunena.org/team" target="_blank">Kunena Team</a></dd>
							<hr class="hr-condensed">
							<dt><?php echo JText::_('COM_KUNENA_CPANEL_LABEL_COPYRIGHT') ?>:</dt>
							<dd>&copy; 2008 - 2015 Kunena, All rights reserved.</dd>
							<hr class="hr-condensed">
							<dt><?php echo JText::_('COM_KUNENA_CPANEL_LABEL_LABEL_LICENSE') ?>:</dt>
							<dd>GNU General Public License</dd>
							<hr class="hr-condensed">
							<dt><?php echo JText::_('COM_KUNENA_CPANEL_LABEL_MOREINFO') ?>:</dt>
							<dd><a href="http://www.kunena.org/terms-of-use" target="_blank">http://www.kunena.org/terms-of-use</a></dd>
						</dl>
					</div>
				</div>
		</section>
		<div class="pull-right small">
			<?php echo KunenaVersion::getLongVersionHTML(); ?>
		</div>
	</div>
</div>
