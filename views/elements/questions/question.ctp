<h4>
<?php echo (empty($question['FavoriteQuestion'])) 
	? $html->link('[Star]', array('plugin'=>'answers','controller'=>'favorite_questions','action'=>'add', $question['id']), array('class'=>'star')) 
	: $html->link('[UnStar]', array('plugin'=>'answers','controller'=>'favorite_questions','action'=>'delete', $question['id']), array('class'=>'unstar'));
?>
	<?php echo $html->link($question['title'], array(
'plugin'=>'answers',
'controller'=>'questions',
'action'=>'view', 
$question['id'],
Inflector::slug($question['title'])
)); ?>
</h4>

<p>In <?php echo $html->link($question['Category']['name'], array('plugin'=>'answers','controller'=> 'categories', 'action'=>'view', $question['Category']['id'], Inflector::slug($question['Category']['name']))); ?> 
- Asked by 
<?php 
if (!empty($question['User']['UserAnswerProfile']['alias'])){
	echo $html->link($question['User']['UserAnswerProfile']['alias'], array('controller'=> 'user_answer_profiles', 'action'=>'view', $question['User']['id'])); 
}else{
	echo 'anonymous';
}
?>
 - <?php echo $question['answer_count']; ?> answers 
- <?php echo $time->timeAgoInWords($question['created']); ?></p>



