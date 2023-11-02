<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2018 Combodo SARL
 * @license	http://opensource.org/licenses/AGPL-3.0
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with iTop. If not, see <http://www.gnu.org/licenses/>
 */
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Approval:Tab:Title' => '审批状态',
	'Approval:Tab:Start' => '开始',
	'Approval:Tab:End' => '结束',
	'Approval:Tab:StepEnd-Limit' => '时间限制 (隐含结果)',
	'Approval:Tab:StepEnd-Theoretical' => '假设的时间限制 (时长限制为%1$s mn)',
	'Approval:Tab:StepSumary-Ongoing' => '等待回复中',
	'Approval:Tab:StepSumary-OK' => '已同意',
	'Approval:Tab:StepSumary-KO' => '已驳回',
	'Approval:Tab:StepSumary-OK-Timeout' => '已同意 (超时)',
	'Approval:Tab:StepSumary-KO-Timeout' => '已驳回 (超时)',
	'Approval:Tab:StepSumary-Idle' => '未开始',
	'Approval:Tab:StepSumary-Skipped' => '已忽略',
	'Approval:Tab:End-Abort' => '此审批流程已被%1$s忽视, 在%2$s',
	'Approval:Tab:StepEnd-Condition-FirstReject' => '此步骤结束于首个驳回, 或全部同意',
	'Approval:Tab:StepEnd-Condition-FirstApprove' => '此步骤结束于首个同意, 或全部驳回',
	'Approval:Tab:StepEnd-Condition-FirstReply' => '此步骤结束于首个回复',
	'Approval:Tab:Error' => '审批流程出错: %1$s',
	'Approval:Comment-Label' => '审批意见',
	'Approval:Comment-Tooltip' => '若驳回则必填, 若同意则选填',
	'Approval:Comment-Mandatory' => '驳回时必须填写审批意见',
	'Approval:Comment-Reused' => '已经回复过审批步骤%1$s, 审批意见是 "%2$s"',
	'Approval:Action-Approve' => '同意',
	'Approval:Action-Reject' => '驳回',
	'Approval:Action-ApproveOrReject' => '同意或驳回',
	'Approval:Action-Abort' => '忽略此审批过程',
	'Approval:Form:Title' => '同意',
	'Approval:Form:Ref' => '同意%1$s的审批',
	'Approval:Form:ApproverDeleted' => '抱歉, 与您身份相关的记录已被删除.',
	'Approval:Form:ObjectDeleted' => '抱歉, the object of the approval has been deleted.~~',
	'Approval:Form:AnswerGivenBy' => '抱歉, the reply has already been given by \'%1$s\'~~', 
	'Approval:Form:AlreadyApproved' => '抱歉, the process has already been completed with result: Approved.~~',
	'Approval:Form:AlreadyRejected' => '抱歉, the process has already been completed with result: Rejected.~~',
	'Approval:Form:StepApproved' => '抱歉, this phase has been completed with result: Approved. The approval process is continuing...~~',
	'Approval:Form:StepRejected' => '抱歉, this phase has been completed with result: Rejected. The approval process is continuing...~~',
	'Approval:Abort:Explain' => 'You have requested to <b>bypass</b> the approval process. This will stop the process and none of the approvers will be allowed to give their answer anymore.~~',
	'Approval:Form:AnswerRecorded-Continue' => 'Your answer has been recorded. The approval process is continuing.~~',
	'Approval:Form:AnswerRecorded-Approved' => 'Your answer has been recorded: the approval process is now complete with result APPROVED.~~',
	'Approval:Form:AnswerRecorded-Rejected' => 'Your answer has been recorded: the approval process is now complete with result REJECTED.~~',
	'Approval:Approved-On-behalf-of' => '已由%1$s代表%2$s同意',
	'Approval:Rejected-On-behalf-of' => '已由%1$s代表%2$s驳回',
	'Approval:Approved-By' => '同意自%1$s',
	'Approval:Rejected-By' => '驳回自%1$s',
	'Approval:Ongoing-Title' => '进行中的审批',
	'Approval:Ongoing-Title+' => '类型为%1$s的对象的审批流程',
	'Approval:Ongoing-FilterMyApprovals' => '显示要求我审批的条目',
	'Approval:Ongoing-NothingCurrently' => '没有进行中的审批.',
	'Approval:Remind-Btn' => '发送提醒...',
	'Approval:Remind-DlgTitle' => '发送提醒',
	'Approval:Remind-DlgBody' => '以下联系人将再次收到提醒:',
	'Approval:ReminderDone' => '提醒已发送给%1$d名人员.',
	'Approval:Portal:Title' => '等待您审批的条目',
	'Approval:Portal:Title+' => '轻选择要审批的条目并点击位于页面底部的按钮',
	'Approval:Portal:NoItem' => '当前没有等待您审批的条目',
	'Approval:Portal:Btn:Approve' => '同意',
	'Approval:Portal:Btn:Reject' => '驳回',
	'Approval:Portal:CommentTitle' => '审批意见 (若驳回则必填)',
	'Approval:Portal:CommentPlaceholder' => '~~',
	'Approval:Portal:Success' => '您的意见已记录.',
	'Approval:Portal:Dlg:Approve' => '请您确认同意这<em><span class="approval-count">?</span></em>个条目',
	'Approval:Portal:Dlg:ApproveOne' => '请您确认同意这个条目',
	'Approval:Portal:Dlg:Btn:Approve' => '同意!',
	'Approval:Portal:Dlg:Reject' => '请您确认驳回这<em><span class="approval-count">?</span></em>个条目',
	'Approval:Portal:Dlg:RejectOne' => '请您确认驳回这个条目',
	'Approval:Portal:Dlg:Btn:Reject' => '驳回!',
	'Class:TriggerOnApprovalRequest' => '触发器 (当要求审批时)',
	'Class:TriggerOnApprovalRequest+' => '触发器基于审批要求',
	'Class:ActionEmailApprovalRequest' => '邮件审批要求',
	'Class:ActionEmailApprovalRequest/Attribute:subject_reminder' => '主题 (提醒)',
	'Class:ActionEmailApprovalRequest/Attribute:subject_reminder+' => '发送提醒邮件时使用的主题',
));

//
// Class: ApprovalScheme
//
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:ApprovalScheme' => '审批方案',
	'Class:ApprovalScheme+' => '~~',
	'Class:ApprovalScheme/Attribute:obj_class' => '对象类型',
	'Class:ApprovalScheme/Attribute:obj_class+' => '~~',
	'Class:ApprovalScheme/Attribute:obj_key' => '对象主键',
	'Class:ApprovalScheme/Attribute:obj_key+' => '~~',
	'Class:ApprovalScheme/Attribute:started' => '已开始',
	'Class:ApprovalScheme/Attribute:started+' => '~~',
	'Class:ApprovalScheme/Attribute:ended' => '已结束',
	'Class:ApprovalScheme/Attribute:ended+' => '~~',
	'Class:ApprovalScheme/Attribute:timeout' => '已超时',
	'Class:ApprovalScheme/Attribute:timeout+' => '~~',
	'Class:ApprovalScheme/Attribute:current_step' => '当前步骤',
	'Class:ApprovalScheme/Attribute:current_step+' => '~~',
	'Class:ApprovalScheme/Attribute:status' => '状态',
	'Class:ApprovalScheme/Attribute:status+' => '~~',
	'Class:ApprovalScheme/Attribute:status/Value:ongoing' => '进行中',
	'Class:ApprovalScheme/Attribute:status/Value:ongoing+' => '~~',
	'Class:ApprovalScheme/Attribute:status/Value:accepted' => '已接受',
	'Class:ApprovalScheme/Attribute:status/Value:accepted+' => '~~',
	'Class:ApprovalScheme/Attribute:status/Value:rejected' => '已拒绝',
	'Class:ApprovalScheme/Attribute:status/Value:rejected+' => '~~',
	'Class:ApprovalScheme/Attribute:last_error' => '最新错误',
	'Class:ApprovalScheme/Attribute:last_error+' => '~~',
	'Class:ApprovalScheme/Attribute:abort_comment' => '终止意见',
	'Class:ApprovalScheme/Attribute:abort_comment+' => '~~',
	'Class:ApprovalScheme/Attribute:abort_user_id' => '终止的用户',
	'Class:ApprovalScheme/Attribute:abort_user_id+' => '~~',
	'Class:ApprovalScheme/Attribute:abort_date' => '终止日期',
	'Class:ApprovalScheme/Attribute:abort_date+' => '~~',
	'Class:ApprovalScheme/Attribute:label' => '标签',
	'Class:ApprovalScheme/Attribute:label+' => '~~',
	'Class:ApprovalScheme/Attribute:steps' => '步骤',
	'Class:ApprovalScheme/Attribute:steps+' => '~~',
));

//
// Class: TriggerOnApprovalRequest
//
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request' => '发送请求给',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request+' => '~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:both' => '审批人及其代理人',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:both+' => '~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:approvers' => '仅审批人',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:approvers+' => '~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:substitutes' => '仅代理人',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:substitutes+' => '~~',
));
