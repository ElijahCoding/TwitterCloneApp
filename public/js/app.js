let app = new Vue({
  el: '#timeline',

  data: {
    post: '',
    posts: []
  },

  methods: {
    postStatus (e) {
      // e.preventDefault();

      $.ajax({
        url: '/posts',
        type: 'post',
        dataType: 'json',
        data: {
          'body': this.post
        }
      }).success(function(data) {
        this.post = '';
        this.posts.unshift(data)
      }.bind(this));
    }
  }
});
