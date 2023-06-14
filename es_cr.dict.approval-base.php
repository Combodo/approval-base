<?php
// Copyright (C) 2012-2014 Combodo SARL
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
Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Approval:Tab:Title' => 'Estatus Aprobación',
	'Approval:Tab:Start' => 'Inicio',
	'Approval:Tab:End' => 'Fin',
	'Approval:Tab:StepEnd-Limit' => 'Tiempo Límite (resultado implicito)',
	'Approval:Tab:StepEnd-Theoretical' => 'Tiempo Límite Teórico (duración limitada a %1$s min)',
	'Approval:Tab:StepSumary-Ongoing' => 'Esperando por respuestas',
	'Approval:Tab:StepSumary-OK' => 'Aprobado',
	'Approval:Tab:StepSumary-KO' => 'Rechazado',
	'Approval:Tab:StepSumary-OK-Timeout' => 'Aprobado (tiempo de espera)',
	'Approval:Tab:StepSumary-KO-Timeout' => 'Rechazado (tiempo de espera)',
	'Approval:Tab:StepSumary-Idle' => 'No iniciado',
	'Approval:Tab:StepSumary-Skipped' => 'Saltado',
	'Approval:Tab:End-Abort' => 'El proceso de aprobación fue saltado por %1$s a %2$s',
	'Approval:Tab:StepEnd-Condition-FirstReject' => 'Este paso termina en el primer rechazo, o si es 100% aprobado',
	'Approval:Tab:StepEnd-Condition-FirstApprove' => 'Este paso termina en la primer aprobación, o si es 100% rechazado',
	'Approval:Tab:StepEnd-Condition-FirstReply' => 'Este paso termina con la primer respuesta',
	'Approval:Tab:Error' => 'Un error ocurrió durante el proceso de aprobación: %1$s',
	'Approval:Comment-Label' => 'Su comentario',
	'Approval:Comment-Tooltip' => 'Obligatorio para el rechazo, opcional para la aprobación',
	'Approval:Comment-Mandatory' => 'Un comentario debe ser provisto para el rechazo',
	'Approval:Comment-Reused' => 'Respuesta recibida al paso %1$s, con momentario "%2$s"',
	'Approval:Action-Approve' => 'Aprobar',
	'Approval:Action-Reject' => 'Rechazar',
	'Approval:Action-ApproveOrReject' => 'Aprobar o Rechazar',
	'Approval:Action-Abort' => 'Saltar el proceso de aprobación',
	'Approval:Form:Title' => 'Aprobación',
	'Approval:Form:Ref' => 'Proceso de Aprobación para %1$s',
	'Approval:Form:ApproverDeleted' => 'Lo siento, el registro correspondiente a su identidad ha sido borrado.',
	'Approval:Form:ObjectDeleted' => 'Lo siento, el objeto de aprobación ha sido borrado.',
	'Approval:Form:AnswerGivenBy' => 'Lo siento, la respuesta ya ha sido recibida para \'%1$s\'', 
	'Approval:Form:AlreadyApproved' => 'Lo siento, el proceso ha sido completado con resultado: Aprobado.',
	'Approval:Form:AlreadyRejected' => 'Lo siento, el proceso ha sido completado con resultado: Rechazado.',
	'Approval:Form:StepApproved' => 'Lo siento, esta fase ha sido completado con el resultado: Aprobado. El proceso de aprobación continua...',
	'Approval:Form:StepRejected' => 'Lo siento, esta fase ha sido completado con el resultado: Rechazado. El proceso de aprobación continua...',
	'Approval:Abort:Explain' => 'Ha solicitado <b>Saltar</b> el proceso de aprobación. Esto detendrá el proceso y ninguno de los aprobadores podrá dar sus respuestas en adelante.',
	'Approval:Form:AnswerRecorded-Continue' => 'Su respuesta ha sido registrada. El procso de aprobación continua.',
	'Approval:Form:AnswerRecorded-Approved' => 'Su respuesta ha sido registrada: El proceso de aprobación está completo con el resultado: APROBADO.',
	'Approval:Form:AnswerRecorded-Rejected' => 'Su respuesta ha sido registrada: El proceso de aprobación está completo con el resultado: RECHAZADO.',
	'Approval:Approved-On-behalf-of' => 'Aprobado por %1$s en nombre de %2$s',
	'Approval:Rejected-On-behalf-of' => 'Rechazado por %1$s en nombre de %2$s',
	'Approval:Approved-By' => 'Aprobado por %1$s',
	'Approval:Rejected-By' => 'Rechazado por %1$s',
	'Approval:Ongoing-Title' => 'Aprobaciones en Curso',
	'Approval:Ongoing-Title+' => 'Procesos de Aprobación para objetos de la clase %1$s',
	'Approval:Ongoing-FilterMyApprovals' => 'Mostrar elementos para los que mi aprobación es requerida',
	'Approval:Ongoing-NothingCurrently' => 'No hay aprobaciones en curso.',
	'Approval:Remind-Btn' => 'Enviar un recordatorio...',
	'Approval:Remind-DlgTitle' => 'Enviar un recordatorio',
	'Approval:Remind-DlgBody' => 'Los siguientes contactos serán notificados nuevamente:',
	'Approval:ReminderDone' => 'Un recordatorio ha sido enviado a %1$d persona(s).',
	'Approval:Portal:Title' => 'Elementos esperando su aprobación',
	'Approval:Portal:Title+' => 'Por favor selecciones elementos para aprobación y use los botones en la parte inferior de la página',
	'Approval:Portal:NoItem' => 'No hay elementos esperando su aprobación',
	'Approval:Portal:Btn:Approve' => 'Aprobar',
	'Approval:Portal:Btn:Reject' => 'Rechazar',
	'Approval:Portal:CommentTitle' => 'Comentario de Aprobación (obligatorio en caso de Rechazo)',
	'Approval:Portal:CommentPlaceholder' => '',
	'Approval:Portal:Success' => 'Su retroalimentación ha sido registrada.',
	'Approval:Portal:Dlg:Approve' => 'Por favor confirme que desea aprobar <em><span class="approval-count">?</span></em> elemento(s)',
	'Approval:Portal:Dlg:ApproveOne' => 'Por favor confirme que desea aprobar este elemento',
	'Approval:Portal:Dlg:Btn:Approve' => 'Aprobar',
	'Approval:Portal:Dlg:Reject' => 'Por favor confirme que desea rechazar <em><span class="approval-count">?</span></em> elemento(s)',
	'Approval:Portal:Dlg:RejectOne' => 'Por favor confirme que desea rechazar este elemento',
	'Approval:Portal:Dlg:Btn:Reject' => 'Rechazar',
	'Class:TriggerOnApprovalRequest' => 'Disparador (cuando una aprobación es requerida)',
	'Class:TriggerOnApprovalRequest+' => 'Solicitud de disparador o aprobación',
	'Class:ActionEmailApprovalRequest' => 'Solicitud de aprobación por Correo-e',
	'Class:ActionEmailApprovalRequest/Attribute:subject_reminder' => 'Asunto (recordatorio)',
	'Class:ActionEmailApprovalRequest/Attribute:subject_reminder+' => 'Asunto del correo en caso de enviar recordatorio',
));

//
// Class: ApprovalScheme
//
Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
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
Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request' => 'Send request to~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request+' => '~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:both' => 'Both approvers and substitutes~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:both+' => '~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:approvers' => 'Approvers only~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:approvers+' => '~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:substitutes' => 'Substitutes only~~',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:substitutes+' => '~~',
));
