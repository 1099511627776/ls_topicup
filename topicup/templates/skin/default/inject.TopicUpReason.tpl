{if $oUserCurrent and $oUserCurrent->isAdministrator}
<div class="topicup-reason">
    {if $oTopic->getTopicUpReason()}
        <strong>{$aLang.plugin.topicup.topic_up_reason}:</strong>
        <span>{$oTopic->getTopicUpReason()}</span>
    {/if}
</div>
{/if}