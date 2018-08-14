//controlling database

function deleteEntity(event,id)
{
    event.preventDefault();
    $('#deleteId').val(id);
    $('#deleteUserForm').submit();
}
function createPage(event)
{
    event.preventDefault();
    var markupStr = $('#summernote').summernote('code');
    $('#pageContent').val(markupStr);
    $('#pageCreateForm').submit();
}

function createContent(event)
{
    event.preventDefault();
    var markupStr = $('#summernote').summernote('code');
    $('#pageContent').val(markupStr);
    $('#contentCreateForm').submit();
}
function refreshData()
{
    lastMsgTutor=$('#lastMsgTutor').text();
    lastMsgStudent=$('#lastMsgStudent').text();
    var id=$('#userHolder').text();
    var live=$('#liveHolder').text();

    $.ajax({
        type: 'POST',
        url: "mvc/controllers/liveController.php",
        data: {
        'route':'refresh',
        'user': id,
        'live':live, 
        'lastMsgTutor':lastMsgTutor,
        'lastMsgStudent':lastMsgStudent,
        },
        dataType: "text",
        success: function(resultData) { 
            setData(resultData);
         }
    });
}
function sendTutorMsg()
{
    var msg=$('#tutorMsg').val();
    var id=$('#userHolder').text();
    var live=$('#liveHolder').text();
    $('#tutorMsg').val("");
    
    if(msg.length>0){
        $.ajax({
            type: 'POST',
            url: "mvc/controllers/liveController.php",
            data: {
            'route':'msg',
            'msg':msg,
            'user': id,
            'live':live, 
            'type':'tutor',
            },
            dataType: "text",
            success: function(resultData) { 
                refreshData();
            }
        });
    }

}
function sendStudentMsg()
{
    var msg=$('#studentMsg').val();
    var id=$('#userHolder').text();
    var live=$('#liveHolder').text();
    $('#tutorMsg').val("");
    if(msg.length>0){
        $.ajax({
            type: 'POST',
            url: "mvc/controllers/liveController.php",
            data: {
            'route':'msg',
            'msg':msg,
            'user': id,
            'live':live, 
            'type':'student',
            },
            dataType: "text",
            success: function(resultData) { 
                refreshData();
            }
        });
    }
}



function setData(data)
{
    //tutor*admin:dsfsdfdsfsd~tutor*admin:dsfsdfsd~tutorMsg*7~studentMsg*-1
    var tutorMsgsHolder=$('#tutorMsgsHolder');
    var studentMsgsHolder=$('#studentMsgsHolder');
    var msgs=data.split('~');
    for(i=0;i<msgs.length;i++)
    {
        var msg=msgs[i].split('|');
        if(msg[0]=='tutor')
        {
            var theMsg=msg[1].split('²');
            tutorMsgsHolder.append('<p><b>'+theMsg[0]+'</b>: '+theMsg[1]+'</p>');
        }
        else if(msg[0]=='student')
        {
            var theMsg=msg[1].split('²');
            studentMsgsHolder.append('<p><b>'+theMsg[0]+'</b>: '+theMsg[1]+'</p>');
        }
        else if(msg[0]=='tutorMsg')
        {
            $('#lastMsgTutor').text(msg[1])
        }
        else
        {
            $('#lastMsgStudent').text(msg[1]);
        }
    }
}
function refreshAfterTime()
{
    refreshData();
    setTimeout(
        function() {
            refreshAfterTime()
        }, 3000);
}
/*function initializeAnalysis(event,id)
{
    event.preventDefault();
    var path="mvc/controllers/analysisController.php?action=initialize&id={{ analysis.id }}";

    $.ajax({
        type: 'POST',
        url: "mvc/controllers/analysisController.php",
        data: {'route':'initialize',
        'id': id},
        dataType: "text",
        success: function(resultData) { 
          //$('#courseHolder').html(resultData);
         }
    });
}*/
//sidebar togle
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

//initializing the plugins
$(document).ready(function() {
    $('#example').DataTable();
} );
$(document).ready(function() {
    $('#summernote').summernote({
        placeholder: 'filler text',
        tabsize: 2,
        height: 100
      });
} );
if( $('#liveHolder').length )    
{
     refreshData();
}
