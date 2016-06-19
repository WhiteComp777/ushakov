//data
var data = {
    call: false,
};
// Define some components
var Main = Vue.extend({
    template: '#mainTPL',
    ready: function(){
        startUniverce();
    }
})

var About = Vue.extend({
    template: '#aboutTPL',
    data: function(){
        return {
            post: '',
        }
    },
    created: function(){
        this.getPost();
    },
    methods: {
        getPost: function(){
            aboutmeId = 4;
            var resource = this.$resource('blog/4');
            resource.get({}, function(post){
                this.post = post;
            });
        }
    },

})

var Blog = Vue.extend({
    template: '#blogTPL',
 	data: function(){
 		return {
 			posts: [],
 		}
 	},
    created: function(){
    	this.getPosts();
    },
    methods: {
    	getPosts: function(){
    		var resource = this.$resource('blog/');
    		resource.get({}, function(posts){
    			this.posts = posts;
    		});
    	}
    },
    filters: {
        truncate: function(string, value) {
            return string.split(" ").slice(0, parseInt(value)).join(' ')+'...';
          }
    }

})

var Post = Vue.extend({
    template: '#postTPL',
    data: function(){ 
        return {
            post: {},
        }
    },
    created: function(){
        this.getPost();
    },
    methods: {
        getPost: function(){
            // aboutmeId = 4;
            var resource = this.$resource('blog/'+this.$route.params.postId);
            resource.get({}, function(post){
                this.post = post;
                console.log(post);
            });
        }
    },
})

var Portfolio = Vue.extend({
    template: '#portfolioTPL'
})

var Hell = Vue.extend({
    template: '#hellTPL',
})

var Contacts = Vue.extend({
    template: '#contactsTPL',
    data: function(){
        return data;
    },
    ready: function(){ initUnicorn();  },
    methods: {
    }
    
})

var App = Vue.extend({
    methods: {
        openCall: function(){
            // document.getElementsByClassName('body_inner')[0].addClass('openCall');
        }
    },
    data: function(){
        return  data;
    },
    ready: function(){
        // alert(this.call);
    }
})
var router = new VueRouter()

router.map({
    '/': {
    	name: 'main',
        component: Main
    },
    '/about': {
    	name: 'about',
        component: About
    },
    '/blog': {
    	name: 'blog',
        component: Blog
    },
    '/post/:postId':{
        name: 'post',
        component: Post,
    },
    '/protfolio': {
    	name: 'portfolio',
        component: Portfolio
    },
    '/hell': {
    	name: 'hell',
        component: Hell
    },
    '/contacts': {
    	name: 'contacts',
        component: Contacts
    },
})
router.start(App, 'body')