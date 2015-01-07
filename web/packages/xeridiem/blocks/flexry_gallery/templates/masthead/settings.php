<?php defined('C5_EXECUTE') or die("Access Denied.");
/** @var BlockTemplateHelper $templateHelper */
$templateHelper;
/** @var FormHelper $formHelper */
$formHelper = Loader::helper('form');

// options
$autoPlay        = array('false' => 'No', 'true' => 'Yes');
$autoPlaySpeed   = array_combine(range(1,10,.5), range(1,10,.5));
$pauseMouseOver  = array('false' => 'No', 'true' => 'Yes');
?>

<?php Loader::packageElement('alert_crop_fit', 'flexry'); ?>

<p><strong>Note:</strong> Lightboxes are not supported by this template, even if enabled in the <i>Settings</i> tab.</p>

<table class="table table-bordered">
    <thead>
        <tr>
            <th colspan="5">Settings</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>AutoPlay</td>
            <td>AutoPlay Speed</td>
            <td>Pause On Hover</td>
        </tr>
        <tr>
            <td><?php echo $formHelper->select($templateHelper->field('autoPlay'), $autoPlay, FlexryBlockTemplateOptions::valueOrDefault($templateHelper->value('autoPlay'), '3')); ?></td>
            <td><?php echo $formHelper->select($templateHelper->field('autoPlaySpeed'), $autoPlaySpeed, FlexryBlockTemplateOptions::valueOrDefault($templateHelper->value('autoPlaySpeed'), '3')); ?></td>
            <td><?php echo $formHelper->select($templateHelper->field('pauseMouseOver'), $pauseMouseOver, FlexryBlockTemplateOptions::valueOrDefault($templateHelper->value('pauseMouseOver'), 'true')); ?></td>
        </tr>
    </tbody>
</table>