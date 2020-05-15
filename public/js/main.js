$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})

// $(document).ready(function(){
    
    
    
// });

var BaseRecord = {
top9: 1,
more:function(){
    var ajaxSetting={
        method: 'get',
        url: './',
        data:{
            top9: this.top9,
        },
        success:function(data){
            //alert(data.table);
            $('.changable_content').html(data.table);
        },
    };
    $.ajax(ajaxSetting);
},

search:function(value){
    var ajaxSetting={
        method: 'get',
        url: './',
        data:{
            search: value,
        },
        success:function(data){
            //alert(data.table);
            $('.changable_content').html(data.table);
        },
    };
    $.ajax(ajaxSetting);
},


removeone:function(id){
    var ajaxSetting={
        method: 'post',
        url: './clearone',
        data:{
            id: id,
        },
        success:function(data){
            //alert(data);
            BaseRecord.cart();
        },
    };
    $.ajax(ajaxSetting);
},

clearall:function(){
    var ajaxSetting={
        method: 'post',
        url: './clearall',
        success:function(data){
            //alert(data);
            BaseRecord.cart();
        },
    };
    $.ajax(ajaxSetting);
},


cart:function(){
    var ajaxSetting={
        method: 'get',
        url: './cart',
        success:function(data){
            //alert(data);
            $('.cart-items').html(data.table);

            $('.listbuttonremove').click(function(){
                BaseRecord.removeone($(this).attr('id'));
                return false;
            });

        },
    };
    $.ajax(ajaxSetting);
},

mailer: function(email){
    //if(value !=''){
   var ajaxSetting={
      method: 'post',
      url: './mailer',
      data: {
         email: email,
      },
      success: function(data){
         //alert(data.answer);
         //alert(data);
         if(data.answer){
            var data_json=JSON.parse(data.answer);
            if(data_json['mail']){
                $('.result').html('Message has been seccessfully sent . . . .');
                $('.result').css('color', 'green');
            }else{
                $('.result').html('There is any mistake . . . .');
                $('.result').css('color', 'red');
            }
         }else{
            var data_json=JSON.parse(data);
            var error_str = '';
            for(var i in data_json){
                error_str += data_json[i] +'\n';
            }
            alert(error_str);
         }
        
      },
   };
   $.ajax(ajaxSetting); 
   // }else{
   //      alert('Field must be filled!');
   //  }
},



};
