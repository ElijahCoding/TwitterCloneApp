let app = new Vue({
  el: '#timeline',

  data: {
    post: ''
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
      }).success(function() {
        this.post = '';
      }.bind(this));
    }
  }
});
