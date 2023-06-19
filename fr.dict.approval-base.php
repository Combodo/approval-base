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
Dict::Add('FR FR', 'French', 'Français', array(
	'Approval:Tab:Title' => 'Statut d\'approbation',
	'Approval:Tab:Start' => 'Début',
	'Approval:Tab:End' => 'Fin',
	'Approval:Tab:StepEnd-Limit' => 'Limite de temps (Résultat implicite)',
	'Approval:Tab:StepEnd-Theoretical' => 'Limite de temps théorique (durée limitée à %1$s mn)',
	'Approval:Tab:StepSumary-Ongoing' => 'En attente de réponse',
	'Approval:Tab:StepSumary-OK' => 'Approuvé',
	'Approval:Tab:StepSumary-KO' => 'Rejeté',
	'Approval:Tab:StepSumary-OK-Timeout' => 'Approuvé (délai dépassé)',
	'Approval:Tab:StepSumary-KO-Timeout' => 'Rejeté (délai dépassé)',
	'Approval:Tab:StepSumary-Idle' => 'Pas démarré',
	'Approval:Tab:StepSumary-Skipped' => 'Passé',
	'Approval:Tab:End-Abort' => 'Le processus d\'approbation a été contourné par %1$s, le %2$s',
	'Approval:Tab:StepEnd-Condition-FirstReject' => 'Etape conclue au premier rejet, ou si approuvée à 100%',
	'Approval:Tab:StepEnd-Condition-FirstApprove' => 'Etape conclue à la première approbation, ou si rejetée à 100%',
	'Approval:Tab:StepEnd-Condition-FirstReply' => 'Etape conclue à la première réponse obtenue',
	'Approval:Tab:Error' => 'Une erreur est survenue durant le processus d\'approbation %1$s',
	'Approval:Comment-Label' => 'Commentaire',
	'Approval:Comment-Tooltip' => 'Obligatoire pour pouvoir rejeter, optionnel pour accepter',
	'Approval:Comment-Mandatory' => 'Veuillez saisir un commentaire pour pouvoir rejeter',
	'Approval:Comment-Reused' => 'Réponse déjà faite à l\'étape %1$s, avec le commentaire "%2$s"',
	'Approval:Action-Approve' => 'Approuver',
	'Approval:Action-Reject' => 'Rejeter',
	'Approval:Action-ApproveOrReject' => 'Approuver ou Rejeter',
	'Approval:Action-Abort' => 'Contourner le processus d\'approbation',
	'Approval:Form:Title' => 'Approbation',
	'Approval:Form:Ref' => 'Processus d\'approbation pour %1$s',
	'Approval:Form:ApproverDeleted' => 'Désolé, l\'enregistrement correspondant à votre identité a été supprimé.',
	'Approval:Form:ObjectDeleted' => 'Désolé, l\'object de l\'approbation a été supprimé.',
	'Approval:Form:AnswerGivenBy' => 'Désolé, la réponse a déjà été donnée par \'%1$s\'', 
	'Approval:Form:AlreadyApproved' => 'Désolé, le processus d\'approbation a été complété. Résultat: Approuvé.',
	'Approval:Form:AlreadyRejected' => 'Désolé, le processus d\'approbation a été complété. Résultat: Rejeté.',
	'Approval:Form:StepApproved' => 'Désolé cette phase a été réalisé avec le résultat: Approuvé. Le processus d\'approbation continue...',
	'Approval:Form:StepRejected' => 'Désolé cette phase a été réalisé avec le résultat: Rejeté. Le processus d\'approbation continue...',
	'Approval:Abort:Explain' => 'Vous avez demandé à <b>contourner</b> le processus d\'approbation. Ceci va interrompre le processus, et les personnes interrogées ne pourront plus donner leur avis.',
	'Approval:Form:AnswerRecorded-Continue' => 'Votre réponse a été enregistrée. Le processus d\'approbation continue...',
	'Approval:Form:AnswerRecorded-Approved' => 'Votre réponse a été enregistrée. Le processus d\'approbation est maintenant terminé avec le résultat "Approuvé".',
	'Approval:Form:AnswerRecorded-Rejected' => 'Votre réponse a été enregistrée. Le processus d\'approbation est maintenant terminé avec le résultat "Rejeté".',
	'Approval:Approved-On-behalf-of' => 'Approuvé par %1$s pour le compte de %2$s',
	'Approval:Rejected-On-behalf-of' => 'Rejeté par %1$s pour le compte de %2$s',
	'Approval:Approved-By' => 'Approuvé par %1$s',
	'Approval:Rejected-By' => 'Rejeté par %1$s',
	'Approval:Ongoing-Title' => 'Approbation en attente',
	'Approval:Ongoing-Title+' => 'Processus d\'approbation pour l\'élément %1$s',
	'Approval:Ongoing-FilterMyApprovals' => 'Montrer les éléments pour lesquels mon approbation est requise',
	'Approval:Ongoing-NothingCurrently' => 'Il n\'y a aucun processus d\'approbation en cours.',
	'Approval:Remind-Btn' => 'Envoyer une relance...',
	'Approval:Remind-DlgTitle' => 'Envoyer une relance',
	'Approval:Remind-DlgBody' => 'Un mél de relance va être envoyé aux destinataires suivants:',
	'Approval:ReminderDone' => 'La relance a été faite pour %1$d contact(s).',
	'Approval:Portal:Title' => 'Eléments en attente de votre approbation',
	'Approval:Portal:Title+' => 'Veuillez sélectionner les éléments à approuver, puis utiliser les boutons au bas de la page',
	'Approval:Portal:NoItem' => 'Il n\'y a pas de demande en attente de votre approbation',
	'Approval:Portal:Btn:Approve' => 'Approuver',
	'Approval:Portal:Btn:Reject' => 'Rejeter',
	'Approval:Portal:CommentTitle' => 'Commentaire d\'approbation (obligatoire en cas de rejet)',
	'Approval:Portal:CommentPlaceholder' => '',
	'Approval:Portal:Success' => 'Votre avis a été pris en compte.',
	'Approval:Portal:Dlg:Approve' => 'Veuillez confirmer votre approbation pour <em><span class="approval-count">?</span></em> élément(s)',
	'Approval:Portal:Dlg:ApproveOne' => 'Veuillez confirmer votre approbation pour cet élément',
	'Approval:Portal:Dlg:Btn:Approve' => 'Approuver !',
	'Approval:Portal:Dlg:Reject' => 'Veuillez confirmer votre refus pour <em><span class="approval-count">?</span></em> élément(s)',
	'Approval:Portal:Dlg:RejectOne' => 'Veuillez confirmer votre refus pour cet élément',
	'Approval:Portal:Dlg:Btn:Reject' => 'Rejeter !',
	'Class:TriggerOnApprovalRequest' => 'Déclencheur sur approbation requise',
	'Class:TriggerOnApprovalRequest+' => '',
	'Class:ActionEmailApprovalRequest' => 'Demande d\'approbation par mél',
	'Class:ActionEmailApprovalRequest/Attribute:subject_reminder' => 'Sujet (relance)',
	'Class:ActionEmailApprovalRequest/Attribute:subject_reminder+' => 'Sujet du mél dans le cas d\'une relance',
));

//
// Class: ApprovalScheme
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:ApprovalScheme' => 'Schéma d\'approbation',
	'Class:ApprovalScheme+' => '',
	'Class:ApprovalScheme/Attribute:obj_class' => 'Object class',
	'Class:ApprovalScheme/Attribute:obj_class+' => '',
	'Class:ApprovalScheme/Attribute:obj_key' => 'Object key',
	'Class:ApprovalScheme/Attribute:obj_key+' => '',
	'Class:ApprovalScheme/Attribute:started' => 'Démarré',
	'Class:ApprovalScheme/Attribute:started+' => '',
	'Class:ApprovalScheme/Attribute:ended' => 'Terminé',
	'Class:ApprovalScheme/Attribute:ended+' => '',
	'Class:ApprovalScheme/Attribute:timeout' => 'Abandonné',
	'Class:ApprovalScheme/Attribute:timeout+' => '',
	'Class:ApprovalScheme/Attribute:current_step' => 'Etape en cours',
	'Class:ApprovalScheme/Attribute:current_step+' => 'A quelle étape en est-on du shéma d\'approbation',
	'Class:ApprovalScheme/Attribute:status' => 'Etat',
	'Class:ApprovalScheme/Attribute:status+' => '',
	'Class:ApprovalScheme/Attribute:status/Value:ongoing' => 'En cours',
	'Class:ApprovalScheme/Attribute:status/Value:ongoing+' => '',
	'Class:ApprovalScheme/Attribute:status/Value:accepted' => 'Accepté',
	'Class:ApprovalScheme/Attribute:status/Value:accepted+' => '',
	'Class:ApprovalScheme/Attribute:status/Value:rejected' => 'Rejeté',
	'Class:ApprovalScheme/Attribute:status/Value:rejected+' => '',
	'Class:ApprovalScheme/Attribute:last_error' => 'Dernière erreur',
	'Class:ApprovalScheme/Attribute:last_error+' => '',
	'Class:ApprovalScheme/Attribute:abort_comment' => 'Explication sur l\'abandon',
	'Class:ApprovalScheme/Attribute:abort_comment+' => '',
	'Class:ApprovalScheme/Attribute:abort_user_id' => 'Utilisateur ayant déclenché l\'abandon',
	'Class:ApprovalScheme/Attribute:abort_user_id+' => '',
	'Class:ApprovalScheme/Attribute:abort_date' => 'Date de l\'abandon',
	'Class:ApprovalScheme/Attribute:abort_date+' => '',
	'Class:ApprovalScheme/Attribute:label' => 'Label',
	'Class:ApprovalScheme/Attribute:label+' => '',
	'Class:ApprovalScheme/Attribute:steps' => 'Etapes',
	'Class:ApprovalScheme/Attribute:steps+' => '',
));

//
// Class: TriggerOnApprovalRequest
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request' => 'Soumettre à l\approbation :',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request+' => '',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:both' => 'des approbateurs et des délégués',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:both+' => '',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:approvers' => 'des approbateurs seulement',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:approvers+' => '',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:substitutes' => 'des délégués seulement',
	'Class:TriggerOnApprovalRequest/Attribute:target_approval_request/Value:substitutes+' => '',
));
