jQuery(document).ready(function ($) {

    // ---------------------------------------------------------
    // 添加更多, 用于重复字段
    // ---------------------------------------------------------
    $('.add-row').on('click', function () {
        var row = $(this).parent().find('input:last').clone(true);
        row.addClass('new-row');
        row.insertAfter($(this).parent().find('input:last'));
        return false;
    });

    // 移除添加的元素
    $('.remove-row').on('click', function () {
        $(this).parent().find('input:last').remove();
        return false;
    });


    // ---------------------------------------------------------
    // 文件上传, 目前插入 URL, 考虑做成插入 ID的方式, 方便获取缩略图
    // ---------------------------------------------------------
    var _custom_media = true, _orig_send_attachment = wp.media.editor.send.attachment;

    $('.wizhi_upload_button').click(function (e) {
        var send_attachment_bkp = wp.media.editor.send.attachment;
        var button = $(this);
        _custom_media = true;
        wp.media.editor.send.attachment = function (props, attachment) {
            if (_custom_media) {
                button.parent().parent().find('input[type=text]').val(attachment.url);
            } else {
                return _orig_send_attachment.apply(this, [props,
                    attachment]);
            }
        };

        wp.media.editor.open(button);
        return false;
    });

    $('.add_media').on('click', function () {
        _custom_media = false;
    });

});