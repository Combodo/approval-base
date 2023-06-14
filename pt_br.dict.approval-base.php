<?php
// Copyright (C) 2012-2018 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
/**
 * Localized data
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Approval:Tab:Title' => 'Status de aprovação',
	'Approval:Tab:Start' => 'Início',
	'Approval:Tab:End' => 'Fim',
	'Approval:Tab:StepEnd-Limit' => 'Limite de tempo (resultado implícito)',
	'Approval:Tab:StepEnd-Theoretical' => 'Limite de tempo teórico (duração limitada a %1$s mn)',
	'Approval:Tab:StepSumary-Ongoing' => 'Esperando por respostas',
	'Approval:Tab:StepSumary-OK' => 'Aprovado',
	'Approval:Tab:StepSumary-KO' => 'Rejeitado',
	'Approval:Tab:StepSumary-OK-Timeout' => 'Aprovado (timeout)',
	'Approval:Tab:StepSumary-KO-Timeout' => 'Rejeitado (timeout)',
	'Approval:Tab:StepSumary-Idle' => 'Não iniciado',
	'Approval:Tab:StepSumary-Skipped' => 'Pulou',
	'Approval:Tab:End-Abort' => 'O processo de aprovação foi ignorado por %1$s at %2$s',
	'Approval:Tab:StepEnd-Condition-FirstReject' => 'Esta etapa termina na primeira rejeição, ou se 100% aprovado',
	'Approval:Tab:StepEnd-Condition-FirstApprove' => 'Esta etapa termina na primeira aprovação, ou se 100% rejeitado',
	'Approval:Tab:StepEnd-Condition-FirstReply' => 'Esta etapa termina na primeira resposta',
	'Approval:Tab:Error' => 'Um erro ocorreu durante o processo de aprovação: %1$s',
	'Approval:Comment-Label' => 'Seu comentário',
	'Approval:Comment-Tooltip' => 'Obrigatório para rejeição, opcional para aprovação',
	'Approval:Comment-Mandatory' => 'Um comentário deve ser inserido para rejeição',
	'Approval:Comment-Reused' => 'Resposta já feita no passo %1$s, com comentário "%2$s"',
	'Approval:Action-Approve' => 'Aprovar',
	'Approval:Action-Reject' => 'Rejeitar',
	'Approval:Action-ApproveOrReject' => 'Aprovar ou Rejeitar',
	'Approval:Action-Abort' => 'Ignorar o processo de aprovação',
	'Approval:Form:Title' => 'Aprovação',
	'Approval:Form:Ref' => 'Processo de aprovação para %1$s',
	'Approval:Form:ApproverDeleted' => 'Desculpe, o registro correspondente a sua identidade foi excluído',
	'Approval:Form:ObjectDeleted' => 'Desculpe, o objeto da aprovação foi excluído',
	'Approval:Form:AnswerGivenBy' => 'Desculpe, a resposta já foi dada por \'%1$s\'', 
	'Approval:Form:AlreadyApproved' => 'Desculpe, o processo já foi concluído com o resultado: aprovado.',
	'Approval:Form:AlreadyRejected' => 'Desculpe, o processo já foi concluído com o resultado: rejeitado.',
	'Approval:Form:StepApproved' => 'Desculpe, esta fase foi concluída com o resultado: aprovado. O processo de aprovação continua...',
	'Approval:Form:StepRejected' => 'Desculpe, esta fase foi concluída com o resultado: rejeitado. O processo de aprovação continua...',
	'Approval:Abort:Explain' => 'Você pediu para <b>bypass</b> o processo de aprovação. Isso interromperá o processo e nenhum dos aprovadores poderão responder.',
	'Approval:Form:AnswerRecorded-Continue' => 'Sua resposta foi registrada. O processo de aprovação continua.',
	'Approval:Form:AnswerRecorded-Approved' => 'Sua resposta foi registrada. O processo de aprovação agora está completo com o resultado APROVADO.',
	'Approval:Form:AnswerRecorded-Rejected' => 'Sua resposta foi registrada. O processo de aprovação agora está completo com o resultado REJEITADO.',
	'Approval:Approved-On-behalf-of' => 'Aprovado por %1$s em nome de %2$s',
	'Approval:Rejected-On-behalf-of' => 'Rejeitado por %1$s em nome de %2$s',
	'Approval:Approved-By' => 'Aprovado por %1$s',
	'Approval:Rejected-By' => 'Rejeitado %1$s',
	'Approval:Ongoing-Title' => 'Aprovações em andamento',
	'Approval:Ongoing-Title+' => 'Processos de aprovação para objetos de classe %1$s',
	'Approval:Ongoing-FilterMyApprovals' => 'Mostrar itens para os quais minha aprovação está sendo exigida.',
	'Approval:Ongoing-NothingCurrently' => 'Não há aprovação em andamento.',
	'Approval:Remind-Btn' => 'Enviar um lembrete...',
	'Approval:Remind-DlgTitle' => 'Enviar um lembrete',
	'Approval:Remind-DlgBody' => 'Os seguintes contatos serão notificados novamente:',
	'Approval:ReminderDone' => 'Um lembrete foi enviado para %1$d pessoa(as).',
	'Approval:Portal:Title' => 'Itens aguardando sua aprovação',
	'Approval:Portal:Title+' => 'Por favor selecione os itens para aprovar e usar os botões localizados na parte inferior da página',
	'Approval:Portal:NoItem' => 'No momento, não há nenhum item esperando sua aprovação',
	'Approval:Portal:Btn:Approve' => 'Aprovar',
	'Approval:Portal:Btn:Reject' => 'Rejeitar',
	'Approval:Portal:CommentTitle' => 'Comentário de aprovação (obrigatório em caso de rejeição)',
	'Approval:Portal:CommentPlaceholder' => '',
	'Approval:Portal:Success' => 'Seu feedback foi gravado.',
	'Approval:Portal:Dlg:Approve' => 'Por favor, confirme que você deseja aprovar <em><span class="approval-count">?</span></em> item(ns)',
	'Approval:Portal:Dlg:ApproveOne' => 'Por favor, confirme que você deseja aprovar este item.',
	'Approval:Portal:Dlg:Btn:Approve' => 'Aprovar!',
	'Approval:Portal:Dlg:Reject' => 'Por favor, confirme que você deseja rejeitar <em><span class="approval-count">?</span></em> item(ns)',
	'Approval:Portal:Dlg:RejectOne' => 'Por favor, confirme que você deseja rejeitar este item.',
	'Approval:Portal:Dlg:Btn:Reject' => 'Rejeitar!',
	'Class:TriggerOnApprovalRequest' => 'Disparar (quando uma aprovação é solicitada)',
	'Class:TriggerOnApprovalRequest+' => 'Disparar no pedido de aprovação',
	'Class:ActionEmailApprovalRequest' => 'Pedido de aprovação por e-mail',
	'Class:ActionEmailApprovalRequest/Attribute:subject_reminder' => 'Assunto (lembrete)',
	'Class:ActionEmailApprovalRequest/Attribute:subject_reminder+' => 'Assunto do e-mail no caso de um lembrete ser enviado',
));

//
// Class: ApprovalScheme
//
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:ApprovalScheme' => 'ApprovalScheme~~',
	'Class:ApprovalScheme+' => '~~',
	'Class:ApprovalScheme/Attribute:obj_class' => 'Obj class~~',
	'Class:ApprovalScheme/Attribute:obj_class+' => '~~',
	'Class:ApprovalScheme/Attribute:obj_key' => 'Obj key~~',
	'Class:ApprovalScheme/Attribute:obj_key+' => '~~',
	'Class:ApprovalScheme/Attribute:started' => 'Started~~',
	'Class:ApprovalScheme/Attribute:started+' => '~~',
	'Class:ApprovalScheme/Attribute:ended' => 'Ended~~',
	'Class:ApprovalScheme/Attribute:ended+' => '~~',
	'Class:ApprovalScheme/Attribute:timeout' => 'Timeout~~',
	'Class:ApprovalScheme/Attribute:timeout+' => '~~',
	'Class:ApprovalScheme/Attribute:current_step' => 'Current step~~',
	'Class:ApprovalScheme/Attribute:current_step+' => '~~',
	'Class:ApprovalScheme/Attribute:status' => 'Status~~',
	'Class:ApprovalScheme/Attribute:status+' => '~~',
	'Class:ApprovalScheme/Attribute:status/Value:ongoing' => 'Ongoing~~',
	'Class:ApprovalScheme/Attribute:status/Value:ongoing+' => '~~',
	'Class:ApprovalScheme/Attribute:status/Value:accepted' => 'Accepted~~',
	'Class:ApprovalScheme/Attribute:status/Value:accepted+' => '~~',
	'Class:ApprovalScheme/Attribute:status/Value:rejected' => 'Rejected~~',
	'Class:ApprovalScheme/Attribute:status/Value:rejected+' => '~~',
	'Class:ApprovalScheme/Attribute:last_error' => 'Last error~~',
	'Class:ApprovalScheme/Attribute:last_error+' => '~~',
	'Class:ApprovalScheme/Attribute:abort_comment' => 'Abort comment~~',
	'Class:ApprovalScheme/Attribute:abort_comment+' => '~~',
	'Class:ApprovalScheme/Attribute:abort_user_id' => 'Abort user id~~',
	'Class:ApprovalScheme/Attribute:abort_user_id+' => '~~',
	'Class:ApprovalScheme/Attribute:abort_date' => 'Abort date~~',
	'Class:ApprovalScheme/Attribute:abort_date+' => '~~',
	'Class:ApprovalScheme/Attribute:label' => 'Label~~',
	'Class:ApprovalScheme/Attribute:label+' => '~~',
	'Class:ApprovalScheme/Attribute:steps' => 'Steps~~',
	'Class:ApprovalScheme/Attribute:steps+' => '~~',
));

//
// Class: TriggerOnApprovalRequest
//
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request' => 'Send request to~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request+' => '~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:both' => 'Both approvers and substitutes~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:both+' => '~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:approvers' => 'Approvers only~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:approvers+' => '~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:substitutes' => 'Substitutes only~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:substitutes+' => '~~',
));
