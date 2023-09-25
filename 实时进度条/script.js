$(document).ready(function () {
    // 启动进度更新
    updateProgress();

    // 获取重置按钮元素
    var resetButton = $('#reset-button');

    function updateProgress() {
        // 向后端发起Ajax请求，获取进度百分比
        $.ajax({
            url: 'http://localhost:8080/jdt', // 替换为你的后端API端点
            method: 'GET',
            dataType: 'json',
            success: function (data) {
                // 更新进度条的宽度和文本
                $('#progress-bar').css('width', data.progress + '%');
                $('#progress-bar').text(data.progress + '%');

                // 如果进度未达到100%，继续更新
                if (data.progress < 100) {
                    setTimeout(updateProgress, 1000); // 每秒更新一次
                } else {
                    // 进度完成
                    $('#progress-bar').removeClass('progress-bar').addClass('progress-bar bg-success');
                    $('#progress-bar').text('完成');
                }
            },
            error: function (error) {
                console.error('发生错误：', error);
            }
        });
    }

    // 添加点击事件处理程序来重置进度
    resetButton.on('click', function () {
        // 向后端发起Ajax请求，带有reset=true参数来重置进度
        $.ajax({
            url: 'http://localhost:8080/jdt?reset=true', // 替换为你的后端API端点
            method: 'GET',
            dataType: 'json',
            success: function (data) {
                // 重置进度条的宽度和文本
                $('#progress-bar').css('width', '0%');
                $('#progress-bar').text('0%');
            },
            error: function (error) {
                console.error('发生错误：', error);
            }
        });
    });
});
