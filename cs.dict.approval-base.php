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
Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Approval:Tab:Title' => 'Stav schvalování',
	'Approval:Tab:Start' => 'Začátek',
	'Approval:Tab:End' => 'Konec',
	'Approval:Tab:StepEnd-Limit' => 'Time limit (implicit result)~~',
	'Approval:Tab:StepEnd-Theoretical' => 'Theoretical time limit (duration limited to %1$s mn)~~',
	'Approval:Tab:StepSumary-Ongoing' => 'Čekající na odpověď',
	'Approval:Tab:StepSumary-OK' => 'Schváleno',
	'Approval:Tab:StepSumary-KO' => 'Zamítnuto',
	'Approval:Tab:StepSumary-OK-Timeout' => 'Schváleno (čas vypršel)',
	'Approval:Tab:StepSumary-KO-Timeout' => 'Zamítnuto (čas vypršel)',
	'Approval:Tab:StepSumary-Idle' => 'Nebylo zahájeno',
	'Approval:Tab:StepSumary-Skipped' => 'Přeskočen',
	'Approval:Tab:End-Abort' => 'The approval process has been bypassed by %1$s at %2$s~~',
	'Approval:Tab:StepEnd-Condition-FirstReject' => 'This step finishes on the first rejection, or if 100% approved~~',
	'Approval:Tab:StepEnd-Condition-FirstApprove' => 'This step finishes on the first approval, or if 100% rejected~~',
	'Approval:Tab:StepEnd-Condition-FirstReply' => 'This step finishes on the first reply~~',
	'Approval:Tab:Error' => 'An error occured during the approval process: %1$s~~',
	'Approval:Comment-Label' => 'Váš komentář',
	'Approval:Comment-Tooltip' => 'Mandatory for rejection, optional for approval~~',
	'Approval:Comment-Mandatory' => 'A comment must be given for rejection~~',
	'Approval:Comment-Reused' => 'Reply already made at step %1$s, with comment "%2$s"~~',
	'Approval:Action-Approve' => 'Schválit',
	'Approval:Action-Reject' => 'Zamítnout',
	'Approval:Action-ApproveOrReject' => 'Schválit nebo zamítnout',
	'Approval:Action-Abort' => 'Přeskočit proces schvalování',
	'Approval:Form:Title' => 'Schválení',
	'Approval:Form:Ref' => 'Schvalovací proces pro %1$s',
	'Approval:Form:ApproverDeleted' => 'Sorry, the record corresponding to your identity has been deleted.~~',
	'Approval:Form:ObjectDeleted' => 'Sorry, the object of the approval has been deleted.~~',
	'Approval:Form:AnswerGivenBy' => 'Sorry, the reply has already been given by \'%1$s\'~~', 
	'Approval:Form:AlreadyApproved' => 'Sorry, the process has already been completed with result: Approved.~~',
	'Approval:Form:AlreadyRejected' => 'Sorry, the process has already been completed with result: Rejected.~~',
	'Approval:Form:StepApproved' => 'Sorry, this phase has been completed with result: Approved. The approval process is continuing...~~',
	'Approval:Form:StepRejected' => 'Sorry, this phase has been completed with result: Rejected. The approval process is continuing...~~',
	'Approval:Abort:Explain' => 'You have requested to <b>bypass</b> the approval process. This will stop the process and none of the approvers will be allowed to give their answer anymore.~~',
	'Approval:Form:AnswerRecorded-Continue' => 'Vaše odpověď byla zaznamenána: proces schvalování pokračuje.',
	'Approval:Form:AnswerRecorded-Approved' => 'Vaše odpověď byla zaznamenána: proces schvalování byl ukončen jako SCHVÁLENO',
	'Approval:Form:AnswerRecorded-Rejected' => 'Vaše odpověď byla zaznamenána: proces schvalování byl ukončen jako ZAMÍTNUTO',
	'Approval:Approved-On-behalf-of' => 'Schválil %1$s v zástupu za %2$s',
	'Approval:Rejected-On-behalf-of' => 'Zamítnul %1$s v zástupu za %2$s',
	'Approval:Approved-By' => 'Schválil %1$s',
	'Approval:Rejected-By' => 'Zamítnul %1$s',
	'Approval:Ongoing-Title' => 'Ongoing approvals~~',
	'Approval:Ongoing-Title+' => 'Approval processes for objects of class %1$s~~',
	'Approval:Ongoing-FilterMyApprovals' => 'Show items for which my approval is being required~~',
	'Approval:Ongoing-NothingCurrently' => 'There is no ongoing approval.~~',
	'Approval:Remind-Btn' => 'Send a reminder...~~',
	'Approval:Remind-DlgTitle' => 'Send a reminder~~',
	'Approval:Remind-DlgBody' => 'The following contacts will be notified again:~~',
	'Approval:ReminderDone' => 'A reminder has been sent to %1$d person(s).~~',
	'Approval:Portal:Title' => 'Položky čekající na schválení',
	'Approval:Portal:Title+' => 'Prosím o zvolení položky ke schválení a potvrzení tlačítkem níže',
	'Approval:Portal:NoItem' => 'Aktuálně není žádná položka ke schválení',
	'Approval:Portal:Btn:Approve' => 'Schválit',
	'Approval:Portal:Btn:Reject' => 'Zamítnout',
	'Approval:Portal:CommentTitle' => 'Komentář (vyžadován v případě zamítnutí požadavku)',
	'Approval:Portal:CommentPlaceholder' => 'Komentář, který bude přiložen k požadavku. V případě zamítnutí požadavku je vyplnění komentáře požadováno.',
	'Approval:Portal:Success' => 'Vaše vyjádření bylo zaznamenáno.',
	'Approval:Portal:Dlg:Approve' => 'Prosím o potvrzení, že opravdu požadujete schválit <em><span class="approval-count">?</span></em> požadavku(ů)',
	'Approval:Portal:Dlg:ApproveOne' => 'Prosím o potvrzení schválení',
	'Approval:Portal:Dlg:Btn:Approve' => 'Schválit!',
	'Approval:Portal:Dlg:Reject' => 'Prosím o potvrzení, že opravdu požadujete zamítnout <em><span class="approval-count">?</span></em> požadavku(ů)',
	'Approval:Portal:Dlg:RejectOne' => 'Prosím o potvrzení zamítnutí',
	'Approval:Portal:Dlg:Btn:Reject' => 'Zamítnout!',
	'Class:TriggerOnApprovalRequest' => 'Trigger (when an approval is requested)~~',
	'Class:TriggerOnApprovalRequest+' => 'Trigger on approval request~~',
	'Class:ActionEmailApprovalRequest' => 'Email approval request~~',
	'Class:ActionEmailApprovalRequest/Attribute:subject_reminder' => 'Subject (reminder)~~',
	'Class:ActionEmailApprovalRequest/Attribute:subject_reminder+' => 'Subject of the email in case a reminder is sent~~',
));

//
// Class: ApprovalScheme
//
Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Class:ApprovalScheme' => 'Schéma schvalování',
	'Class:ApprovalScheme+' => '~~',
	'Class:ApprovalScheme/Attribute:obj_class' => 'Třída objektu',
	'Class:ApprovalScheme/Attribute:obj_class+' => '~~',
	'Class:ApprovalScheme/Attribute:obj_key' => 'Klíč objektu',
	'Class:ApprovalScheme/Attribute:obj_key+' => '~~',
	'Class:ApprovalScheme/Attribute:started' => 'Spuštěno',
	'Class:ApprovalScheme/Attribute:started+' => '~~',
	'Class:ApprovalScheme/Attribute:ended' => 'Ukončeno',
	'Class:ApprovalScheme/Attribute:ended+' => '~~',
	'Class:ApprovalScheme/Attribute:timeout' => 'Exspirováno',
	'Class:ApprovalScheme/Attribute:timeout+' => '~~',
	'Class:ApprovalScheme/Attribute:current_step' => 'Aktuální krok',
	'Class:ApprovalScheme/Attribute:current_step+' => '~~',
	'Class:ApprovalScheme/Attribute:status' => 'Stav',
	'Class:ApprovalScheme/Attribute:status+' => '~~',
	'Class:ApprovalScheme/Attribute:status/Value:ongoing' => 'Ongoing~~',
	'Class:ApprovalScheme/Attribute:status/Value:ongoing+' => '~~',
	'Class:ApprovalScheme/Attribute:status/Value:accepted' => 'Akceptováno',
	'Class:ApprovalScheme/Attribute:status/Value:accepted+' => '~~',
	'Class:ApprovalScheme/Attribute:status/Value:rejected' => 'Zamítnuto',
	'Class:ApprovalScheme/Attribute:status/Value:rejected+' => '~~',
	'Class:ApprovalScheme/Attribute:last_error' => 'Poslední chyba',
	'Class:ApprovalScheme/Attribute:last_error+' => '~~',
	'Class:ApprovalScheme/Attribute:abort_comment' => 'Komentář zrušení',
	'Class:ApprovalScheme/Attribute:abort_comment+' => '~~',
	'Class:ApprovalScheme/Attribute:abort_user_id' => 'Stornoval uživatel',
	'Class:ApprovalScheme/Attribute:abort_user_id+' => '~~',
	'Class:ApprovalScheme/Attribute:abort_date' => 'Stronováno',
	'Class:ApprovalScheme/Attribute:abort_date+' => '~~',
	'Class:ApprovalScheme/Attribute:label' => 'Označení',
	'Class:ApprovalScheme/Attribute:label+' => '~~',
	'Class:ApprovalScheme/Attribute:steps' => 'Kroky',
	'Class:ApprovalScheme/Attribute:steps+' => '~~',
));

//
// Class: TriggerOnApprovalRequest
//
Dict::Add('CS CZ', 'Czech', 'Čeština', array(
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request' => 'Poslat požadavek',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request+' => 'Komu má být požadavek zaslán',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:both' => 'Schvalovatelům i zástupcům schvalovatelů',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:both+' => '~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:approvers' => 'Pouze schvalovatelům',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:approvers+' => '~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:substitutes' => 'Pouze zástupcům',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:substitutes+' => '~~',
));
