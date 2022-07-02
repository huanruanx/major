<?php /*a:1:{s:40:"F:\web\yiyanyun\app\admin\view\face.html";i:1650941111;}*/ ?>
<!--
 * @Author: Lucifer
 * @Date: 2022-04-26 10:08:33
 * @LastEditTime: 2022-04-26 10:45:11
 * @FilePath: \yiyanyun\app\admin\view\face.html
-->


<!-- 人脸识别验证测试阶段暂未开放使用 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>请面向摄像头进行人脸识别完成验证</title>
</head>

<body>
    <!--video用于显示媒体设备的视频流，自动播放-->
    <video id="video" autoplay style="width: 480px;height: 320px"></video>
    <!--拍照按钮-->
    <div>
        <button id="capture">拍照</button>
    </div>
    <!--描绘video截图-->
    <canvas id="canvas" width="480" height="320"></canvas>

    <script>
        var video = document.getElementById('video');
        var canvas = document.getElementById('canvas');
        var capture = document.getElementById('capture');
        var context = canvas.getContext('2d');
        function getUserMediaToPhoto(constraints, success, error) {
            if (navigator.mediaDevices.getUserMedia) {
                //最新标准API
                navigator.mediaDevices.getUserMedia(constraints).then(success).catch(error);
            } else if (navigator.webkitGetUserMedia) {
                //webkit核心浏览器
                navigator.webkitGetUserMedia(constraints, success, error);
            } else if (navigator.mozGetUserMedia) {
                //firefox浏览器
                navigator.mozGetUserMedia(constraints, success, error);
            } else if (navigator.getUserMedia) {
                //旧版API
                navigator.getUserMedia(constraints, success, error);
            }
        }
        //成功回调函数
        function success(stream) {
            //兼容webkit核心浏览器
            var CompatibleURL = window.URL || window.webkitURL;
            //将视频流转化为video的源
            video.src = CompatibleURL.createObjectURL(stream);
            video.play();//播放视频
        }
        function error(error) {
            console.log('访问用户媒体失败：', error.name, error.message);
        }
        if (navigator.mediaDevices.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.getUserMedia) {
            getUserMediaToPhoto({ video: { width: 480, height: 320 } }, success, error);
        } else {
            alert('你的浏览器不支持访问用户媒体设备');
        }
        capture.addEventListener('click', function () {
            // 将video画面描绘在canvas画布上
            context.drawImage(video, 0, 0, 480, 320);
        })
    </script>
</body>

</html>