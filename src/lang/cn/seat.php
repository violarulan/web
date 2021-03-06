<?php

/*
 * This file is part of SeAT
 *
 * Copyright (C) 2015, 2016, 2017  Leon Jacobs
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

return [

    // General
    'home'                  => '首页',
    'character'             => '角色|角色',
    'corporation'           => '公司|公司',
    'user'                  => '用户|用户',
    'last_update'           => '最近更新',
    'unknown'               => '未知',
    'note'                  => '注意',
    'name'                  => '名字|名字',
    'granted'               => '已批准',
    'denied'                => '被拒绝',
    'enabled'               => '已启用',
    'disabled'              => '已禁用',
    'username'              => '用户名',
    'email'                 => '邮箱',
    'close'                 => '关闭',
    'date'                  => '日期',
    'status'                => '状态',
    'id'                    => 'ID|ID',
    'type'                  => '类型|类型',
    'expiry'                => '过期',
    'never'                 => '永不',
    'detail'                => '详细|详细',
    'delete'                => '删除',
    'kill'                  => '击杀',
    'verify'                => '验证',
    'reset'                 => '重置',
    'back'                  => '返回',
    'summary'               => '摘要',
    'quantity'              => '数量',
    'volume'                => '体积',
    'group'                 => '组',
    'owner'                 => '拥有人',
    'description'           => '描述',
    'labels'                => '标签',
    'created'               => '创建于',
    'issuer'                => '发布人',
    'title'                 => '标题|标题',
    'price'                 => '价格',
    'reward'                => '奖励',
    'collateral'            => '担保',
    'location'              => '位置',
    'filter'                => '过滤器|过滤器',
    'clear'                 => '清空',
    'none'                  => '无',
    'permission'            => '许可|许可',
    'affiliation'           => '附属|附属',
    'role'                  => '角色|角色',
    'edit'                  => '编辑',
    'remove'                => '删除',
    'yes'                   => '是',
    'no'                    => '否',
    'update'                => '更新',
    'action'                => '行动',
    'key'                   => 'Key',
    'log'                   => '日志|日志',
    'view'                  => '浏览',
    'item'                  => '物品|物品',
    'usage'                 => '用法',
    'unit'                  => '单位|单位',
    'add'                   => '添加',
    'all'                   => '所有',
    'inverse'               => '反向',
    'read'                  => '读',
    'level'                 => '等级',

    // Requirements
    'requirements'          => '需求',
    'requirements_message'  => '以下列表列出了缺省的 PHP 拓展，请在继续之前先安装它们。',
    'php_version'           => 'PHP 版本',
    'php_version_message'   => '当前安装的 PHP 版本未达到 SeAT 的最低版本要求，请升级 PHP。',
    'installed_version'     => '已安装的版本',
    'min_version'           => '最低版本',
    'admin_contact_warning' => '管理者联系方式尚未设置，因此队列不会添加任务，请在 SeAT 选项中设置好。',
    'sso_email_warning'     => '此个人信息目前使用由 SSO 登录过程中自动生成的邮箱地址，请在个人设置中设置一个有效的邮箱地址。',
    'sso_activation'        => 'SSO 激活',
    'sso_confirmation'      => '似乎你已经有一个账户了，请确认你的登录信息以启用 SSO。',

    // Auth
    'failed'                => '此登录凭据和我们的记录不匹配。',
    'throttle'              => '登陆请求次数过多，请在 :seconds 秒后重试。',
    'login_welcome'         => '欢迎，请输入登录凭据',
    'remember_me'           => '记住我',
    'password'              => '密码',
    'password_again'        => '在此输入密码',
    'forgot'                => '我忘了密码',
    'register'              => '注册成为新成员',
    'sign_in'               => '登入',
    'mfa_welcome'           => '请输入安全码继续操作。',
    'mfa'                   => '多因素身份验证',
    'email_verify'          => '邮箱验证',
    'email_verify_welcome'  => '请输入一个有效的邮箱地址。',

    // Registration
    'new_account'           => '注册新账户',
    'register_welcome'      => '请填写一个用户名，和一个强力的密码。',
    'register_eve_warn'     => '请不要使用登录 EVE 的密码',
    'existing_account'      => '我已经有一个账户了',
    'register_account'      => '注册账户',

    // Passwords
    'password_reset'        => '密码重置',
    'reset_welcome'         => '请输入要重置密码账户的邮箱地址。',
    'remember'              => '我能记得我的凭据',
    'reset_topic'           => '重置密码',
    'reset_token_welcome'   => '请输入邮箱和新密码',

    // Header
    'toggle_navigation'     => '切换导航',
    'queued'                => '队列中',
    'working'               => '进行中',
    'joined'                => '已加入',
    'profile'               => '个人资料',
    'sign_out'              => '登出',
    'stop_impersonation'    => '停止模拟',

    // Notifications
    'error'                 => '错误',
    'success'               => '成功',
    'warning'               => '警告',
    'notice'                => '提醒',
    'info'                  => '消息',

    // Menu
    'api_key_management'    => 'API Key 管理',
    'add_api_key'           => '添加一个 EVE API Key',
    'list_keys'             => '列出所有 EVE API Key',
    'all_char'              => '所有角色',
    'mail_timeline'         => '邮件时间线',
    'all_corp'              => '所有公司',
    'configuration'         => '设置',
    'access'                => '权限管理',
    'other'                 => '其它',
    'tools'                 => '工具',
    'security_logs'         => '安全日志',
    'import'                => '导入 API Key',
    'settings'              => 'SeAT 设置',
    'schedule'              => '时程表',
    'no_main_char'          => '无主要角色',
    'hello'                 => '你好',
    'online'                => '在线',
    'search'                => '搜索',
    'main_menu'             => '主菜单',
    'security'              => '安全',
    'tracking'              => '追踪',
    'worker_constraints'    => '线程限制',

    'assets'                      => '资产',
    'calendar'                    => '日历',
    'channels'                    => '频道',
    'contacts'                    => '联系',
    'contracts'                   => '合同',
    'industry'                    => '工业',
    'intel'                       => '情报',
    'killmails'                   => 'KM',
    'mail'                        => '邮件',
    'market'                      => '市场',
    'notifications'               => '通知',
    'pi'                          => '行星开发',
    'research'                    => '研究',
    'sheet'                       => '人物信息',
    'skills'                      => '技能',
    'standings'                   => 'Standings',
    'wallet_journal'              => '钱包日志',
    'wallet_transactions'         => '钱包交易',

    // Dashboard
    'home_page'                   => '首页',
    'dashboard'                   => '控制台',
    'online_layers'               => '在线玩家',
    'owned_api_keys'              => '持有 API Key',
    'total_character_isk'         => '所有角色 ISK',
    'total_character_skillpoints' => '所有角色技能点',
    'total_killmails'             => '所有 KM',
    'main_char_skills'            => ':character_name 的技能',
    'main_char_skills_per_level'  => '每级的技能',
    'main_char_skills_coverage'   => '技能覆盖率 (百分比)',

    // Api Keys
    'api_key_add'                 => '添加一个新的 API Key',
    'key_id'                      => 'Key ID',
    'v_code'                      => 'Verification Code',
    'check_key'                   => '测试 Key',
    'api_new_key'                 => '创建一个 API Key',
    'api_use_link'                => '使用如下链接创建 API Key',
    'api_full_link'               => '所有角色的 Full API',
    'api_full_min_mask'           => '需要最小 Mask 的 API Key',
    'insufficient_access_mask'    => '此 API 不满足最小 Mask 要求',
    'api_key_info'                => 'API Key 信息',
    'api_key_type'                => 'API Key 种类',
    'api_access_mask'             => 'API 权限 Mask',
    'api_add_type_key'            => '添加 :type Api Key',
    'api_add_job'                 => '添加 API Key 会自动添加一个更新它的计划任务',
    'api_min_mask'                => '最小 Mask',
    'api_access'                  => '权限',
    'api_detail'                  => 'API Key 详细信息',
    'api_key_status'              => 'API Key 状态',
    'api_job_update'              => '增加更新任务',
    'owner_info'                  => '持有人信息',
    'no_owner'                    => '这个 API Key 没有持有人',
    'last_login'                  => '上次登录',
    'account_status'              => '账户状态',
    'transfer_ownership'          => '转移所有权',
    'seat_user'                   => 'SeAT 用户',
    'transfer'                    => '转移',
    'mask_map_fail'               => '无法加载 Access Mask map',
    'recent_jobs'                 => '最近任务',
    'scope'                       => '范围',
    'api_all'                     => '所有 API Keys',
    'reveal'                      => '显示',
    'add_success'                 => 'Api Key 成功添加. 更新任务 :jobid 已下发',
    're_enable'                   => '重新启用 Key',
    'disable'                     => '禁用 Key',
    'reenable_all_disabled'       => '重新启用所有已禁用的 Key',
    'disable_all_enabled'         => '禁用所有已启用的 Key',
    'joblog'                      => '任务日志',
    'job_log_config'              => '目前启用状态下才会有任务日志' .
        'it is: :status',

    // People
    'people_groups'               => '人物组',
    'unaffiliated_keys'           => '无所属 Key',
    'add_to_existing'             => '添加至已存在',
    'add_to_existing_group'       => '添加至已存在组',
    'group_main'                  => '主人物',
    'new_group_with_main'         => '创建新组并使用 :name 为主人物',

    // Access
    'access_mangement'            => '权限管理',
    'quick_add_role'              => '快速添加权限组',
    'role_name'                   => '权限组名称',
    'add_new_role'                => '创建权限组',
    'available_roles'             => '可用权限组',
    'quick_add_user'              => '快速添加用户',
    'add_new_user'                => '创建新用户',
    'edit_role'                   => '编辑权限组',
    'available_permissions'       => '可用权限',
    'grant_permissions'           => '赋予权限',
    'inverse_permission'          => '删除权限',
    'inverse_affiliation'         => '删除所属',
    'current_permissions'         => '当前权限',
    'has_superuser'               => '持有 Superuser 权限',
    'permission_inherit'          => '继承所有权限',
    'available_corporations'      => '可用公司',
    'available_characters'        => '可用角色',
    'add_affiliations'            => '增加所属',
    'current_affiliations'        => '目前所属',
    'available_users'             => '可用用户',
    'add_user'                    => '增加用户|增加用户',
    'current_users'               => '当前用户',
    'select_item_add'             => '选择一项以添加',
    'impersonate'                 => '模拟',
    'edit_user'                   => '编辑用户',
    'activate_user'               => '激活用户',
    'deactivate_user'             => '冻结用户',
    'account_status_change'       => '账户状态目前已改变',
    'user_agent'                  => 'UA',
    'login_history'               => '登录历史记录',
    'role_summary'                => '权限摘要',
    'user_updated'                => '用户已更新',
    'user_deleted'                => '用户已删除',
    'self_delete_warning'         => '你不能删除你自己!',
    'impersonating'               => '模拟 :user',
    'revert_impersonation'        => '模拟停止',
    'user_created'                => '用户已创建',
    'unauthorized_request'        => '未授权的请求',
    'unauthorized_request_logged' => '此尝试已经被记录。',

    'role_added'                   => '权限组已添加',
    'role_removed'                 => '权限组已移除',
    'permissions_granted'          => '已授予许可',
    'permission_revoked'           => '已移除许可',
    'user_added'                   => '用户已被加入至该组',
    'user_removed'                 => '用户已被从该组移出',
    'affiliations_added'           => '所属关系已加入该组',
    'affiliation_removed'          => '所属关系已从该组移出',

    // Import
    'api_import_title'             => '导入 API Key',
    'csv_data_source'              => 'CSV 文件',
    'help'                         => '帮助',
    'importing_csv_data'           => '导入 CSV 数据',
    'csv_format_explained'         => 'CSV 文件格式为 keyID,vCode 以下为样例',
    'important_notes'              => '重要事项',
    'curr_user_becomes_owner'      => '当前用户 (:user) 会变更为 API Key 的拥有者',
    'only_format_is_checked'       => 'API Key 的格式只会在这里得到检查，以确保设置为最小的 Mask',
    'update_with_next_job'         => 'Key 数据会在下次任务或手动更新时变更',

    // Schedule
    'new_schedule'                 => '新计划',
    'available_commands'           => '可用指令',
    'cron_expression'              => 'Cron 表达式',
    'current_schedule'             => '当前任务计划',
    'command'                      => '指令',
    'cron'                         => 'Cron',
    'allow_overlap'                => '允许交叠',
    'allow_maintenance'            => '允许在维护模式中',
    'scheduled_commands'           => '计划中的人物',
    'choose_prepop'                => '输入一个预先设置好的 cron 表达式，或者你自己写一个',
    'add_scheduled'                => '增加计划任务',

    // Security
    'category'                     => '分类',
    'message'                      => '消息',
    'source'                       => '来源',

    // Ledger
    'ledger'                       => '钱包账户',
    'bountyprizesbymonth'          => '月赏金数',
    'bountyprizetotal'             => '全部赏金数',
    'pitotals'                     => '全部行星开发税',
    'wallet_division_name'         => '钱包部门名称',
    'wallet_summary'               => '钱包概览|钱包概览',

    // Users
    'user_management'              => '用户管理',

    // Settings
    'admin_email'                  => '管理员邮箱',
    'admin_email_help'             => '请输入 SeAT 管理员的邮箱地址',
    'min_access_mask'              => '需要的最低 Mask',
    'min_character_access_mask'    => '需要的最低角色 Mask',
    'min_corporation_access_mask'  => '需要的最低公司 Mask',
    'force_min_mask'               => '强制最低 Mask',
    'registration'                 => '注册',
    'single_signon'                => 'SSO 登录',
    'admin_warn_sso'               => '请仔细检查你在 .env 文件中的的 EVE_CLIENT_ID, EVE_CLIENT_SECRET and EVE_CALLBACK_URL ，他们可能是错误的或者是空的，这会导致 SSO 失败',
    'allow_sso'                    => '允许 SSO',
    'allow_registration'           => '允许注册',
    'email_activation'             => '邮件激活',
    'require_activation'           => '需要邮件激活',
    'module_versions'              => 'SeAT 模块版本',
    'tp_versions'                  => '第三方版本',
    'installed'                    => '已安装',
    'current'                      => '当前',
    'url'                          => 'Url',
    'google_analytics'             => 'Google Analytics',
    'allow_tracking'               => '允许追踪',
    'tracking_id'                  => 'Unique Tracking ID',
    'tracking_help'                => '在禁用追踪之前请先看一下文档。',
    'worker'                       => '工作线程|工作线程|',

    // Character
    'joined_curr_corp'             => '已加入当前公司',
    'skillpoint'                   => '技能点数|技能点数',
    'account_balance'              => '账户余额',
    'current_ship'                 => '当前船只',
    'last_location'                => '最后地点',
    'security_status'              => '安全等级',
    'items_taking'                 => 'items taking',
    'calendar_events'              => '日历事件',
    'positive_standings'           => '正面声望',
    'neutral_standings'            => '中立声望',
    'negative_standings'           => '负面声望',
    'start'                        => '开始',
    'installer'                    => '安装器',
    'system'                       => '系统',
    'activity'                     => '活动',
    'run'                          => 'Run|Runs',
    'blueprint'                    => '蓝图',
    'product'                      => '产品',
    'victim'                       => '受害人',
    'ship_type'                    => '舰船种类',
    'transaction_type'             => '交易类型',
    'owner_1'                      => '从',
    'owner_2'                      => '到',
    'amount'                       => '数量',
    'balance'                      => '余额',
    'corporation_name'             => '公司名称',
    'from'                         => '从',
    'subject'                      => '主题',
    'to'                           => '到',
    'to_corp_alliance'             => '到公司 / 联盟',
    'to_char'                      => '到角色',
    'total'                        => '总计',
    'updated'                      => '更新于',
    'planet'                       => '星球',
    'upgrade_level'                => '升级等级',
    'no_pins'                      => '# 钉置',
    'agent'                        => '代理人',
    'skill'                        => '技能|技能',
    'points_p_day'                 => '每天点数',
    'remainder'                    => '备忘',
    'skills_summary'               => '技能概览',
    'curr_training'                => '当前训练',
    'skill_training_end'           => '技能训练至',
    'skill_queue'                  => '技能队列',
    'no_skill_training'            => '当前无训练技能',
    'empty_skill_queue'            => '技能队列为空',
    'account_info'                 => '账户信息',
    'paid_until'                   => '付费截止至',
    'logon_count'                  => '登录次数',
    'online_time'                  => '在线时长',
    'jump_fatigue'                 => '跳跃疲劳',
    'jump_clones'                  => '远程克隆',
    'jump_act_timer'               => '跳跃激活计时器',
    'no_jump_clones'               => '无远程克隆',
    'implants'                     => '植入体',
    'no_implants'                  => '无植入体',
    'employment_history'           => '雇佣记录',
    'corporation_titles'           => '公司头衔',
    'item_type'                    => '物品种类',
    'client_name'                  => '客户端名称',
    'client'                       => '客户端',
    'qty'                          => '#',
    'unknown_character'            => '未知角色. 记录中的 API Key 更新好了?',
    'no_account_info'              => '无可用账户信息',
    'channel_members'              => '频道成员',
    'motd'                         => '每日消息',
    'bookmark'                     => '保存的地点|保存的地点',
    'coordinates'                  => '坐标',
    'folder'                       => '文件夹',
    'skills_graph'                 => '技能图表',
    'contract_items'               => '合同物品',

    // Character Intel
    'loading_journal'              => '加载历史记录中...',
    'loading_transactions'         => '加载交易信息中...',
    'loading_mail'                 => '加载邮件中...',

    // Corporation
    'alliance'                     => '联盟',
    'ticker'                       => 'Ticker',
    'ceo'                          => 'CEO',
    'home_station'                 => '基地空间站',
    'tax_rate'                     => '税率',
    'member_count'                 => '成员数',
    'roles_change_log'             => '权限组更改记录',
    'affected'                     => '影响',
    'member_limit'                 => '成员限制',
    'shares'                       => '共享',
    'member_capacity'              => '成员容量',
    'divisional_information'       => '部门信息',
    'corporation_divisions'        => '公司部门',
    'wallet_divisions'             => '钱包部门',
    'unknown_corporation'          => '未知公司，记录中的 API Key 已经更新了？',
    'created_by'                   => '创建由',
    'starbase'                     => 'Starbases|Starbases',
    'state'                        => 'State',
    'fuel_level'                   => '燃料量',
    'offline'                      => '预计下线',
    'cargo_usage'                  => '货柜',
    'onlined_at'                   => '上线于',
    'moon'                         => '卫星',
    'use_standings_from'           => '使用声望模式',
    'attack_on_agression'          => 'Attack On Agression',
    'attack_on_war'                => 'Attack On War',
    'corp_member_access'           => '公司成员可访问',
    'alliance_member_access'       => '联盟成员可访问',
    'fuel_levels'                  => '燃料水平',
    'fuel_blocks'                  => '燃料块',
    'fuel_usage'                   => '燃料量',
    'low_fuel'                     => '低燃料',
    'stront_usage'                 => '锶包合物量',
    'blocks_p_h'                   => '燃料块 p/h',
    'units_p_h'                    => '单位 p/h',
    'sov_bonus'                    => '主权加成',
    'reinforce_estimate'           => '增强模式至',
    'module'                       => '模块|模块',
    'content'                      => '内容',
    'no_known_assets'              => '无已知资产',
    'volume_usage'                 => '容量情况',
    'loading_modules'              => '加载模块信息中...',
    'pocos'                        => '海关',
    'reinforcement'                => '增强',
    'standing_level'               => '声望',
    'tax_alliance_corp'            => '税: 联盟/公司',
    'tax_standings'                => '税: 声望',

    // Profile
    'user_profile'                 => '个人信息',
    'user_preferences'             => '首选项',
    'user_account'                 => '账户',
    'account_settings'             => '设置',
    'upgrade_sso'                  => '升级至 EVE Online SSO Account',
    'change_password'              => '更改密码',
    'change_email'                 => '更改邮箱',
    'superuser'                    => 'Superuser',
    'user_interface'               => '用户界面',
    'main_character'               => '主要角色',
    'seat_skin'                    => 'SeAT 皮肤',
    'language'                     => '语言',
    'sidebar_size'                 => '侧栏尺寸',
    'mail_as_threads'              => '按主题查看邮件',
    'number_format'                => '数字格式',
    'current_format'               => '当前格式',
    'thousands_seperator'          => '千位分隔符',
    'decimal_seperator'            => '小数点分隔符',
    'email_notifications'          => '邮件通知',
    'require_mfa'                  => '需要 MFA',
    'setup_token_now'              => '现在设置令牌 Token',
    'owned_keys'                   => '持有 Key',
    'account_help'                 => '关于查询、权限的信息，请联系 SeAT 管理员。',
    'current_password'             => '当前密码',
    'new_password'                 => '新密码',
    'confirm_new_password'         => '确认新密码',
    'current_email'                => '当前邮箱',
    'new_email'                    => '新邮箱',
    'confirm_new_email'            => '确认新邮箱',
    'mfa_setup'                    => 'MFA 认证设置',
    'scan_qr'                      => '扫描 QR Code',
    'scan_qr_help1'                => '请使用你的认证器应用扫描 QR Code',
    'scan_qr_help2'                => '本页面每次重新加载时，Token 和 QR Code 都会刷新',
    'supported_apps'               => '支持 Google Authenticator 的应用',
    'preferred_apps'               => '偏好应用',
    'other_apps'                   => '其他应用',
    'confirm_code'                 => '确认认证器的安全码',
    'confirm_help'                 => '接下来，输入你的认证器显示的安全码来确认你的设置',
    'code'                         => 'Code',
    'confirm_setup'                => '确认设置',

    // Queue
    'queue_manage'                 => '队列管理',
    'total_jobs'                   => '所有任务',
    'queued_jobs'                  => '队列中的任务',
    'working_jobs'                 => '正在进行的任务',
    'error_jobs'                   => '出错的任务',
    'complete'                     => ' 完成。',
    'history'                      => '历史',
    'submit_jobs'                  => '提交任务',
    'job_submit_desc'              => '这些按钮允许你手工将任务加入队列，和在 CLI 模式下使用队列工具效果一样',
    'no_working'                   => '这些是未工作的任务',
    'no_queue'                     => '这些是未加入队列的任务',
    'job_error_detail'             => '任务错误详细信息',
    'error_details_desc'           => '这是此任务的错误详细调用堆栈，如果你不能离家以下内容请拷贝至 pastebin 发送链接给开发人员',
    'full_job_error'               => '所有任务错误详细信息',
    'job_id'                       => '任务 ID',
    'api'                          => 'Api',
    'actions'                      => '动作',
    'owner_id'                     => '所有人 ID',
    'clear_all_errors'             => '清除所有错误',
    'output'                       => '输出',
    'last_output'                  => '最后输出',
    'view_full'                    => '查看全部',
    'no_errors'                    => '尚无错误',
    'clear_all_history'            => '清除所有历史',
    'job_history'                  => '任务历史',
    'no_history'                   => '无历史任务',
    'eve_api_status'               => 'EVE API 状态',
    'eve_api_error_threshold'      => 'API 错误',
    'eve_api_connection_threshold' => '连接错误',
    'supervisor_offline'           => '在线',
    'supervisor_online'            => '离线',

    // Tools
    'standings_builder'            => '声望工具',

    // Footer
    'web_version'                  => '网页版',
    'sde_version'                  => 'SDE 版本',
    'render_in'                    => '渲染于',
    'copyright'                    => '版权信息',
];
