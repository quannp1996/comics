var boxComments = new Vue({
    el: '#commentbox',
    data: {
        url: url,
        comments: [],
        isSending: false,
        pagination: {},
        commentForm: {
            content: '123',
            name: '',
            email: '',
        }
    },
    mounted: function(){
        $.get(this.url.listComments).then(response => {
            console.log(response);
        });
    },
    methods: {
        addComment: function (comment) {

        },
        postComment: function () {
            $.post(this.url.postComment, {
                _token: 
            }).then(response => {

            });
        }
    },
});