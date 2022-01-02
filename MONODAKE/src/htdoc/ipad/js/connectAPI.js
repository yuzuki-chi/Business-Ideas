const form = document.getElementById('f1');
const f = document.getElementById('file1');
f.addEventListener('change', (evt) => {
    const xhr= new XMLHttpRequest();
    console.log('https://e1d5-34-86-86-158.ngrok.io/upload');
    xhr.open('POST', 'https://e1d5-34-86-86-158.ngrok.io/upload', false);
    // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    // // アップロード関連イベント
    // xhr.upload.addEventListener('loadstart', (evt) => {
    //     // アップロード開始
    // });
    
    // xhr.upload.addEventListener('progress', (evt) => {
    //     // アップロード進行パーセント
    //     let percent = (evt.loaded / evt.total * 100).toFixed(1);
    //     console.log(`++ xhr.upload: progress ${percent}%`);
    // });
    
    // xhr.upload.addEventListener('abort', (evt) => {
    //     // アップロード中断
    //     console.log('++ xhr.upload: abort (Upload aborted)');
    // });
    
    // xhr.upload.addEventListener('error', (evt) => {
    //     // アップロードエラー
    //     console.log('++ xhr.upload: error (Upload failed)');
    // });
    
    // xhr.upload.addEventListener('load', (evt) => {
    //     // アップロード正常終了
    //     console.log('++ xhr.upload: load (Upload Completed Successfully)');
    // });
    
    // xhr.upload.addEventListener('timeout', (evt) => {
    //     // アップロードタイムアウト
    //     console.log('++ xhr.upload: timeout');
    // });
    
    // xhr.upload.addEventListener('loadend', (evt) => {
    //     // アップロード終了 (エラー・正常終了両方)
    //     console.log('++ xhr.upload: loadend (Upload Finished)');
    
    //     console.log(xhr.responseText);
    // });
    
    const fileIn = evt.target;
    console.log(fileIn.files[0]);
    
    var formData = new FormData();
    formData.set("file", fileIn.files[0]);
    xhr.send(formData);

    if (xhr.status === 200) {
        console.log(xhr.responseText);
        const res = JSON.parse(xhr.responseText);
        //-> {"price":1260,"size":80}
        var statusText = document.getElementById('statusText');
        statusText.innerText = res['size'] + "サイズです！ " + res['price'] + "円になります。";
    }
});