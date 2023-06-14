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
Dict::Add('NL NL', 'Dutch', 'Nederlands', array(
	'Approval:Tab:Title' => 'Status goedkeuring',
	'Approval:Tab:Start' => 'Start',
	'Approval:Tab:End' => 'Einde',
	'Approval:Tab:StepEnd-Limit' => 'Tijdslimiet (impliciet resultaat)',
	'Approval:Tab:StepEnd-Theoretical' => 'Theoretische tijdslimiet (duur beperkt tot %1$s mn)',
	'Approval:Tab:StepSumary-Ongoing' => 'Wachtend op antwoord',
	'Approval:Tab:StepSumary-OK' => 'Goedgekeurd',
	'Approval:Tab:StepSumary-KO' => 'Afgewezen',
	'Approval:Tab:StepSumary-OK-Timeout' => 'Goedgekeurd (timeout)',
	'Approval:Tab:StepSumary-KO-Timeout' => 'Afgewezen (timeout)',
	'Approval:Tab:StepSumary-Idle' => 'Niet gestart',
	'Approval:Tab:StepSumary-Skipped' => 'Overgeslagen',
	'Approval:Tab:End-Abort' => 'Het goedkeuringsproces is overgeslagen door %1$s op %2$s',
	'Approval:Tab:StepEnd-Condition-FirstReject' => 'Deze stap is voltooid bij de eerste afwijzing of bij 100% goedkeuring.',
	'Approval:Tab:StepEnd-Condition-FirstApprove' => 'Deze stap is voltooid bij de eerste goedkeruing of bij 100% afwijzing.',
	'Approval:Tab:StepEnd-Condition-FirstReply' => 'Deze stap is voltooid bij het eerste antwoord.',
	'Approval:Tab:Error' => 'Er trad een fout op tijdens het goedkeuringsproces: %1$s',
	'Approval:Comment-Label' => 'Jouw opmerking',
	'Approval:Comment-Tooltip' => 'Bij afwijzen is een opmerking verplicht. Bij goedkeuring is dit optioneel.',
	'Approval:Comment-Mandatory' => 'Er moet een opmerking gegeven worden bij afwijzing.',
	'Approval:Comment-Reused' => 'Dit antwoord staat al bij stap %1$s, met opmerking "%2$s"',
	'Approval:Action-Approve' => 'Keur goed',
	'Approval:Action-Reject' => 'Wijs af',
	'Approval:Action-ApproveOrReject' => 'Goedkeuren of afwijzen',
	'Approval:Action-Abort' => 'Sla het goedkeuringsproces over',
	'Approval:Form:Title' => 'Goedkeuring',
	'Approval:Form:Ref' => 'Goedkeuringsproces voor %1$s',
	'Approval:Form:ApproverDeleted' => 'Sorry, het item gelinkt aan jouw identiteit werd verwijderd.',
	'Approval:Form:ObjectDeleted' => 'Sorry, het item voor goedkeuring werd verwijderd.',
	'Approval:Form:AnswerGivenBy' => 'Sorry, het antwoord werd al gegeven door \'%1$s\'', 
	'Approval:Form:AlreadyApproved' => 'Sorry, het proces werd afgerond met als resultaat: Goedgekeurd.',
	'Approval:Form:AlreadyRejected' => 'Sorry, het proces werd afgerond met als resultaat: Afgewezen',
	'Approval:Form:StepApproved' => 'Sorry, deze fase is afgerond met als resultaat: Goedgekeurd. Het goedkeuringsproces loopt verder ...',
	'Approval:Form:StepRejected' => 'Sorry, deze fase is afgerond met als resultaat: Afgewezen. Het goedkeuringsproces loopt verder ...',
	'Approval:Abort:Explain' => 'Je probeerde het goedkeuringsproces <b>over te slaan</b>. Dit zal het proces stoppen en de goedkeurders zullen geen antwoord meer kunnen geven.',
	'Approval:Form:AnswerRecorded-Continue' => 'Je antwoord werd opgeslagen. Het goedkeuringsproces loopt verder.',
	'Approval:Form:AnswerRecorded-Approved' => 'Je antwoord werd opgeslagen: het goedkeuringsproces werd afgerond met als resultaat: Goedgkeurd',
	'Approval:Form:AnswerRecorded-Rejected' => 'Je antwoord werd opgeslagen: het goedkeuringsproces werd afgerond met als resultaat: Afgewezen',
	'Approval:Approved-On-behalf-of' => 'Goedgekeurd door %1$s namens %2$s',
	'Approval:Rejected-On-behalf-of' => 'Afgewezen door %1$s namens %2$s',
	'Approval:Approved-By' => 'Goedgekeurd door %1$s',
	'Approval:Rejected-By' => 'Afgewezen door %1$s',
	'Approval:Ongoing-Title' => 'Lopende goedkeuringsprocessen',
	'Approval:Ongoing-Title+' => 'Goedkeuringsprocessen voor objecten van de klasse %1$s',
	'Approval:Ongoing-FilterMyApprovals' => 'Toon items waarvoor mijn goedkeuring vereist is',
	'Approval:Ongoing-NothingCurrently' => 'Er zijn geen lopende goedkeuringsprocessen.',
	'Approval:Remind-Btn' => 'Stuur een herinnering...',
	'Approval:Remind-DlgTitle' => 'Stuur een herinnering',
	'Approval:Remind-DlgBody' => 'Deze contacten worden opnieuw verwittigd:',
	'Approval:ReminderDone' => 'Er is een herinnering verstuurd naar %1$d contact(en).',
	'Approval:Portal:Title' => 'Items wachtend op jouw goedkeuring',
	'Approval:Portal:Title+' => 'Selecteer de gewenste items en gebruik de knoppen onderaan',
	'Approval:Portal:NoItem' => 'Er is geen item dat op jouw goedkeuring wacht.',
	'Approval:Portal:Btn:Approve' => 'Keur goed',
	'Approval:Portal:Btn:Reject' => 'Wijs af',
	'Approval:Portal:CommentTitle' => 'Opmerking (verplicht bij afwijzing)',
	'Approval:Portal:CommentPlaceholder' => '',
	'Approval:Portal:Success' => 'Je feedback werd opgeslagen.',
	'Approval:Portal:Dlg:Approve' => 'Bevestig dat je <em><span class="approval-count">?</span></em> item(s) wilt goedkeuren',
	'Approval:Portal:Dlg:ApproveOne' => 'Bevestig dat je dit item wil goedkeuren',
	'Approval:Portal:Dlg:Btn:Approve' => 'Keur goed',
	'Approval:Portal:Dlg:Reject' => 'Bevestig dat je <em><span class="approval-count">?</span></em> item(s) wilt afwijzen',
	'Approval:Portal:Dlg:RejectOne' => 'Bevestig dat je dit item wil afwijzen',
	'Approval:Portal:Dlg:Btn:Reject' => 'Wijs af',
	'Class:TriggerOnApprovalRequest' => 'Trigger (als een goedkeuring gevraagd wordt)',
	'Class:TriggerOnApprovalRequest+' => 'Trigger bij het starten van een goedkeuringsproces',
	'Class:ActionEmailApprovalRequest' => 'Email aanvraag goedkeuring',
	'Class:ActionEmailApprovalRequest/Attribute:subject_reminder' => 'Onderwerp (herinnering)',
	'Class:ActionEmailApprovalRequest/Attribute:subject_reminder+' => 'Onderwerp van de e-mail bij het versturen van een herinnering',
));

//
// Class: ApprovalScheme
//
Dict::Add('NL NL', 'Dutch', 'Nederlands', array(
	'Class:ApprovalScheme' => 'GoedkeuringsSchema',
	'Class:ApprovalScheme+' => '',
	'Class:ApprovalScheme/Attribute:obj_class' => 'Obj klasse',
	'Class:ApprovalScheme/Attribute:obj_class+' => '',
	'Class:ApprovalScheme/Attribute:obj_key' => 'Obj sleutel',
	'Class:ApprovalScheme/Attribute:obj_key+' => '',
	'Class:ApprovalScheme/Attribute:started' => 'Gestart',
	'Class:ApprovalScheme/Attribute:started+' => '',
	'Class:ApprovalScheme/Attribute:ended' => 'Geëindigd',
	'Class:ApprovalScheme/Attribute:ended+' => '',
	'Class:ApprovalScheme/Attribute:timeout' => 'Timeout',
	'Class:ApprovalScheme/Attribute:timeout+' => '',
	'Class:ApprovalScheme/Attribute:current_step' => 'Huidige stap',
	'Class:ApprovalScheme/Attribute:current_step+' => '',
	'Class:ApprovalScheme/Attribute:status' => 'Status',
	'Class:ApprovalScheme/Attribute:status+' => '',
	'Class:ApprovalScheme/Attribute:status/Value:ongoing' => 'Lopend',
	'Class:ApprovalScheme/Attribute:status/Value:ongoing+' => '',
	'Class:ApprovalScheme/Attribute:status/Value:accepted' => 'Geaccepteerd',
	'Class:ApprovalScheme/Attribute:status/Value:accepted+' => '',
	'Class:ApprovalScheme/Attribute:status/Value:rejected' => 'Afgewezen',
	'Class:ApprovalScheme/Attribute:status/Value:rejected+' => '',
	'Class:ApprovalScheme/Attribute:last_error' => 'Recentste fout',
	'Class:ApprovalScheme/Attribute:last_error+' => '',
	'Class:ApprovalScheme/Attribute:abort_comment' => 'Commentaar afwijzing',
	'Class:ApprovalScheme/Attribute:abort_comment+' => '',
	'Class:ApprovalScheme/Attribute:abort_user_id' => 'Gebruiker ID afwijzing',
	'Class:ApprovalScheme/Attribute:abort_user_id+' => '',
	'Class:ApprovalScheme/Attribute:abort_date' => 'Afgewezen op',
	'Class:ApprovalScheme/Attribute:abort_date+' => '',
	'Class:ApprovalScheme/Attribute:label' => 'Label',
	'Class:ApprovalScheme/Attribute:label+' => '',
	'Class:ApprovalScheme/Attribute:steps' => 'Stappen',
	'Class:ApprovalScheme/Attribute:steps+' => '',
));

//
// Class: TriggerOnApprovalRequest
//
Dict::Add('NL NL', 'Dutch', 'Nederlands', array(
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request' => 'Send request to~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request+' => '~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:both' => 'Both approvers and substitutes~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:both+' => '~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:approvers' => 'Approvers only~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:approvers+' => '~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:substitutes' => 'Substitutes only~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:substitutes+' => '~~',
));
