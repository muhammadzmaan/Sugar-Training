<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(

	'LBL_ASSIGN_TEAM'		=> '分配给团队',

	'LBL_RE'					=> '答复：',

	'ERR_BAD_LOGIN_PASSWORD'=> '登录名或者密码错误',
	'ERR_BODY_TOO_LONG'		=> '\r电子邮件正文太长无法捕获完整的电子邮件。请调整。',
	'ERR_INI_ZLIB'			=> '暂时无法关闭 Zlib 压缩。“测试设置”可能失败。',
	'ERR_MAILBOX_FAIL'		=> '不能检索任何电子邮件帐户。',
	'ERR_NO_IMAP'			=> '未发现 IMAP 类。请在继续使用收件箱前解决这个问题。',
    'ERR_NO_OPTS_SAVED' => '没有最佳保存收件箱电子邮件帐户。请重新查看设置',
	'ERR_TEST_MAILBOX'		=> '请检查您的设置并重试。',
    'ERR_DELETE_FOLDER' => '无法删除文件夹。',
    'ERR_UNSUBSCRIBE_FROM_FOLDER' => '从文件夹删除之前，无法退订。',

	'LBL_APPLY_OPTIMUMS'	=> '应用最优设置',
	'LBL_ASSIGN_TO_USER'	=> '分配给用户',
	'LBL_AUTOREPLY_OPTIONS'	=> '自动回复选项',
	'LBL_AUTOREPLY'			=> '自动回复模板',
	'LBL_AUTOREPLY_HELP'	=> '选择一个自动回复通知发件人已经收到他们的回复。',
	'LBL_BASIC'				=> '邮件账户信息',
	'LBL_CASE_MACRO'		=> '案例宏',
	'LBL_CASE_MACRO_DESC'	=> '设置宏，可解析宏和用于链接导入的电子邮件至案例。',
	'LBL_CASE_MACRO_DESC2'	=> '设置其为任何值，但是保留<b>"%1"</b>。',
	'LBL_CERT_DESC'			=> '强制验证邮件服务器的安全证书–如果是自我签署，请不要使用',
	'LBL_CERT'				=> '证书验证',
	'LBL_CLOSE_POPUP'		=> '关闭窗口',
	'LBL_CREATE_NEW_GROUP'	=> '--保存时创建分组--',
	'LBL_CREATE_TEMPLATE'	=> '创建',
	'LBL_SUBSCRIBE_FOLDERS'	=> '订阅文件夹',
	'LBL_DEFAULT_FROM_ADDR'	=> '默认：',
	'LBL_DEFAULT_FROM_NAME'	=> '默认：',
	'LBL_DELETE_SEEN'		=> '在导入后删除已读的电子邮件',
	'LBL_EDIT_TEMPLATE'		=> '编辑',
	'LBL_EMAIL_OPTIONS'		=> '电子邮件处理选项',
	'LBL_EMAIL_BOUNCE_OPTIONS' => '退信处理选项',
    'LBL_FILTER_DOMAINS_DESC'=> '自动回复电子邮件不会发送到的逗号分隔的域名列表。',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> '对所有收到的电子邮件在 Sugar 中选择自动创建电子邮件记录。',
	'LBL_POSSIBLE_ACTION_DESC'		=> '若要创建案例选项，必须选择组文件夹',
    'LBL_FILTER_DOMAINS'    => '此域没有自动回复',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> '<br>查找最佳连接变量。',
	'LBL_FIND_OPTIMUM_TITLE'=> '查找最佳配置',
	'LBL_FIND_SSL_WARN'		=> '<br>测试 SSL 可能需要一段时间。请耐心等待。<br>',
	'LBL_FORCE_DESC'		=> '一些 IMAP/POP3 服务器需要特殊的交换机。当连接时请检查负交换机（比如 /notls）',
	'LBL_FORCE'				=> '强制否定',
	'LBL_FOUND_MAILBOXES'	=> '发现下面可使用的文件夹。<br>请选择其中一个：',
	'LBL_FOUND_OPTIMUM_MSG'	=> '<br>已找到最优设置。请点击下面的按钮以将其应用至邮件帐户。',
	'LBL_FROM_ADDR'			=> '“发件人”地址',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "这里提供的电邮地址可能不出现在&quot;收件人&quot; 由于邮件服务供应商强加限制，邮件的地址选项被发送。在这些情形下，将使用传出邮件服务器中定义的电邮地址。",
	'LBL_FROM_NAME_ADDR'	=> '发件人姓名/电子邮件',
	'LBL_FROM_NAME'			=> '“发件人”姓名',
	'LBL_GROUP_QUEUE'		=> '指派给组',
    'LBL_HOME'              => '首页',
	'LBL_LIST_MAILBOX_TYPE'	=> '使用邮件帐户',
	'LBL_LIST_NAME'			=> '名称:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> '组/个人',
	'LBL_LIST_SERVER_URL'	=> '邮件服务器',
	'LBL_LIST_STATUS'		=> '状态:',
	'LBL_LOGIN'				=> '用户名',
	'LBL_MAILBOX_DEFAULT'	=> '收件箱',
	'LBL_MAILBOX_SSL_DESC'	=> '连接时使用 SSL。如果不能连接，请检查您在安装 PHP 的时候，配置项中是否包含了“--with-imap-ssl”。',
	'LBL_MAILBOX_SSL'		=> '使用 SSL',
	'LBL_MAILBOX_TYPE'		=> '可能采取的行动',
	'LBL_DISTRIBUTION_METHOD' => '分发方法',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => '新案例自动回复模板',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => '选择一个自动回复告诉发件人已经创建客户反馈。邮件附有客户反馈宏设置的主题栏中包含客户反馈编号。该回复只在收到该收件人的第一封邮件后发送。',
	'LBL_MAILBOX'			=> '已监视的文件夹',
	'LBL_TRASH_FOLDER'		=> '垃圾文件夹',
	'LBL_GET_TRASH_FOLDER'	=> '获取垃圾文件夹',
	'LBL_SENT_FOLDER'		=> '已发送文件夹',
	'LBL_GET_SENT_FOLDER'	=> '获取发送文件夹',
	'LBL_SELECT'				=> '选择',
	'LBL_MARK_READ_DESC'	=> '导入后在此邮件服务器上标记信息已读；不删除。',
	'LBL_MARK_READ_NO'		=> '导入后删除标记过的电子邮件',
	'LBL_MARK_READ_YES'		=> '导入后在服务器上保留的电子邮件',
	'LBL_MARK_READ'			=> '在服务器上保留邮件',
	'LBL_MAX_AUTO_REPLIES'	=> '自动回复的数量',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> '设置自动回复的最大数量以在 24 小时内发送一个唯一邮件地址。',
	'LBL_PERSONAL_MODULE_NAME' => '个人邮件帐户',
	'LBL_PERSONAL_MODULE_NAME_SINGULAR' => '个人邮件帐户',
	'LBL_CREATE_CASE'      => '从电子邮件创建客户反馈',
	'LBL_CREATE_CASE_HELP'  => '在 Sugar 中选择从收到的电子邮件中自动创建客户反馈记录。',
	'LBL_MODULE_NAME'		=> '入站电子邮件',
	'LBL_MODULE_NAME_SINGULAR' => '入站电子邮件',
	'LBL_BOUNCE_MODULE_NAME' => '退信处理邮箱',
	'LBL_MODULE_TITLE'		=> '入站电子邮件',
	'LBL_NAME'				=> '名称',
    'LBL_NONE'              => '无',
	'LBL_NO_OPTIMUMS'		=> '未找到最优参数。请检查您的设置，然后再试。',
	'LBL_ONLY_SINCE_DESC'	=> '当使用 POP3 时，PHP 将不能过滤新信息或未读信息。此标签可以核对上次收件箱里的信息。如果您的邮件服务器不支持 IMAP，它将对此有很大改进。',
	'LBL_ONLY_SINCE_NO'		=> '不。检查此邮件服务器上的所有邮件。',
	'LBL_ONLY_SINCE_YES'	=> '是。',
	'LBL_ONLY_SINCE'		=> '只导入最后确认：',
	'LBL_OUTBOUND_SERVER'	=> '传出邮件服务器',
	'LBL_PASSWORD_CHECK'	=> '密码检查',
	'LBL_PASSWORD'			=> '密码',
	'LBL_POP3_SUCCESS'		=> 'POP3 测试连接成功。',
	'LBL_POPUP_FAILURE'		=> '测试连接失败。错误显示在下面。',
	'LBL_POPUP_SUCCESS'		=> '测试连接成功。您的设置可以工作了。',
	'LBL_POPUP_TITLE'		=> '测试设置',
	'LBL_GETTING_FOLDERS_LIST' 		=> '获取文件夹列表',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> '选择订阅文件夹',
	'LBL_SELECT_TRASH_FOLDERS' 		=> '选择垃圾文件夹',
	'LBL_SELECT_SENT_FOLDERS' 		=> '选择已发送的文件夹',
	'LBL_DELETED_FOLDERS_LIST' 		=> '以下文件夹 %s 不存在或已从服务器上被删除',
	'LBL_PORT'				=> '邮件服务器端口',
	'LBL_QUEUE'				=> '邮件帐户队列',
	'LBL_REPLY_NAME_ADDR'	=> '回复名称/邮件',
	'LBL_REPLY_TO_NAME'		=> '"收件人" 姓名',
	'LBL_REPLY_TO_ADDR'		=> '"收件人" 地址',
	'LBL_SAME_AS_ABOVE'		=> '使用发件人姓名/地址',
	'LBL_SAVE_RAW'			=> '保存原始资料',
	'LBL_SAVE_RAW_DESC_1'	=> '如果您想为每一封导入的电子邮件保留原始资料，请选择“是”。',
	'LBL_SAVE_RAW_DESC_2'	=> '大附件与保守或错误配置的数据库可导致错误。',
	'LBL_SERVER_OPTIONS'	=> '高级设置',
	'LBL_SERVER_TYPE'		=> '邮件服务器协议',
	'LBL_SERVER_URL'		=> '邮件服务器地址',
	'LBL_SSL_DESC'			=> '如有您的邮件服务器支持安全端口连接，在导入电子邮件的时候，请启用 SLL 连接。',
	'LBL_ASSIGN_TO_TEAM_DESC' => '所选团队拥有此邮件帐号权限。',
	'LBL_SSL'				=> '使用 SSL',
	'LBL_STATUS'			=> '状态',
	'LBL_SYSTEM_DEFAULT'	=> '系统默认',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> '测试',
	'LBL_TEST_SETTINGS'		=> '测试设置',
	'LBL_TEST_SUCCESSFUL'	=> '连接成功完成。',
	'LBL_TEST_WAIT_MESSAGE'	=> '请稍后...',
	'LBL_TLS_DESC'			=> '连接邮件服务器时使用传输层安全协议–如果您的邮件服务器支持这此协议，请只使用这一个。',
	'LBL_TLS'				=> '使用 TLS',
	'LBL_WARN_IMAP_TITLE'	=> '禁用收件箱',
	'LBL_WARN_IMAP'			=> '警告:',
	'LBL_WARN_NO_IMAP'		=> '收件箱功能<b>不能使用</b>如果在编译 PHP 模块时未打开 IMAPc-client 库。请联系管理员来解决这个问题。',

	'LNK_CREATE_GROUP'		=> ' 创建新组',
	'LNK_LIST_CREATE_NEW_GROUP'	 => '新建组邮件帐户',
	'LNK_LIST_CREATE_NEW_BOUNCE' => '新建退信处理账户',
	'LNK_LIST_MAILBOXES'	=> '所有邮件帐户',
	'LNK_LIST_QUEUES'		=> '所有队列',
	'LNK_LIST_SCHEDULER'	=> '计划任务',
	'LNK_LIST_TEST_IMPORT'	=> '测试电子邮件导入',
	'LNK_NEW_QUEUES'		=> '创建新队列',
	'LNK_SEED_QUEUES'		=> '团队的种子队列',
	'LBL_GROUPFOLDER_ID'	=> '组文件夹 ID',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => '分配至组文件夹',
    'LBL_STATUS_ACTIVE'     => '启用',
    'LBL_STATUS_INACTIVE'   => '停用',
    'LBL_IS_PERSONAL' => '个人',
    'LBL_IS_GROUP' => '组',
    'LBL_ENABLE_AUTO_IMPORT' => '自动导入电子邮件',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => '警告：您正在修改您的自动导入设置可能导致数据丢失。',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => '警告：自动创建客户反馈时，必须启用自动导入。',
	'LBL_EDIT_LAYOUT' => '编辑布局' /*for 508 compliance fix*/,
    'LBL_AUTHORIZED_ACCOUNT' => '电子邮件地址',
    'LBL_EMAIL_PROVIDER' => '电子邮件供应商',
    'LBL_AUTH_STATUS' => '授权状态',
);
