function checkInput(){ 
    if(document.getElementById('name').value.length==0){    
        alert('请输入姓名！');
        document.getElementById('name').focus();
        return false;
    }
    if(document.getElementById('name').value=="不超过5个汉字"){    
        alert('请输入姓名！');
        document.getElementById('name').focus();
        return false;
    }
    if(document.getElementById('message').value.length==0){    
        alert('请输入内容！');
        document.getElementById('message').focus();
        return false;
    }
    if(document.getElementById('message').value=="不超过38个汉字"){    
        alert('请输入内容！');
        document.getElementById('message').focus();
        return false;
    }
}
