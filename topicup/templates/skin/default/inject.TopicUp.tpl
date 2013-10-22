<p>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            ls.blog.loadInfo($('#blog_id').val());
            $('#topic_date').datetimepicker({
                language:'ru',
                dateFormat:'yy-mm-dd',
                timeFormat:'HH:mm:ss'
            });
        });
    </script>
    <label>
        <input type="checkbox" id="topic_topicUp" name="topic_topicUp" class="input-checkbox" value="1" >{$aLang.plugin.topicup.title}</input>
        <input id="topic_topicUp_reason" name="topic_topicUp_reason" class="input-text input-width-300" placeholder="{$aLang.plugin.topicup.reason_placeholder}"></input>
    </label>
    <small class="note">{$aLang.plugin.topicup.description}</small>
    <label>
        <input type="checkbox" id="topic_dateChange" name="topic_dateChange" class="input-checkbox" value="1">{$aLang.plugin.topicup.datechange}</input>
        <input type="text" id="topic_date" name="topic_date" class="input-text" value="{$smarty.now|date_format:'Y-m-d H:i:s'}"></input>
    </label>
</p>
