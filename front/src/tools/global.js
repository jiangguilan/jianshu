function G(){
    this.post = function () {
        console.log('post');
    }
}

// class a {
//     constructor(){

//     }

//     post(){

//     }
// }
// var b = {
//     post: function (){

//     }
// }

module.exports = new G();