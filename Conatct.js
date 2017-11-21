var express=require('express');
app=express();
app.use(express.static(_dirname));
app.get('/Contact',function(){
	res.sendFile(__dirname+'Contact.html');
});
app.listen(82,function(){
	console.log("hello");
})