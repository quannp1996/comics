var boxComments = new Vue({
    el: '#commentbox',
    data: {
        url: url,
        comments: [],
        isSending: false,
        pagination: {},
        commentForm: {
            content: 'Cảm ơn bạn',
            name: '',
            email: '',
        }
    },
    mounted: function(){
        $.get(this.url.listComments).then(response => {
            this.comments = response.data;
            this.pagination = response.meta.pagination;
        });
    },
    methods: {
        addComment: function (comment) {
            this.comments.push(comment);
        },
        postComment: function () {
            $.post(this.url.postComment, {
                ... this.commentForm
            }).then(response => {
                console.log(response);
            });
        }
    },
});