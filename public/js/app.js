//data
var data = {
    call: false,
};
// Define some components
var Main = Vue.extend({
    template: '#mainTPL',
    ready: function(){
        startUniverce();
    },
    // data: function(){ return data; },
   
})

var About = Vue.extend({
    template: '#aboutTPL',
    data: function(){
        return {
            post: '',
        }
    },
    // created: function(){
    //     this.getPost();
    // },
    // methods: {
    //     getPost: function(){
    //         aboutmeId = 4;
    //         var resource = this.$resource('blog/4');
    //         resource.get({}, function(post){
    //             this.post = post;
    //         });
    //     }
    // },

})

var Blog = Vue.extend({
    template: '#blogTPL',
 	data: function(){
 		return {
 			posts: [],
 		}
 	},
    created: function(){
        NProgress.start();
    	this.getPosts();
    },
    methods: {
    	getPosts: function(){
    		var resource = this.$resource('blog/');
    		resource.get({}, function(posts){
                NProgress.done();
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
        NProgress.start();
        this.getPost();
    },
    methods: {
        getPost: function(){
            // aboutmeId = 4;
            var resource = this.$resource('blog/'+this.$route.params.postId);
            resource.get({}, function(post){
                this.post = post;
                NProgress.done();
            });
        }
    },
})

var Portfolio = Vue.extend({
    template: '#portfolioTPL',
    created: function(){
        NProgress.start();
        this.getPortfolios();
    },
    data: function(){
        return {
            portfolios: [],
        }
    },
    methods: {
        getPortfolios: function(){
            var resource = this.$resource('portfolio/');
            resource.get({}, function(portfolios){
                this.portfolios = portfolios;
                NProgress.done();
            });

        },
    },
    ready: function(){
    }
})

var PortfolioItem = Vue.extend({
    template: '#portfolioItemTPL',
    data: function(){
        return {
            portfolio: {},
        }
    },
    created: function(){
        NProgress.start();
        this.getPortfolio();
    },
    methods: {
        getPortfolio: function(){
            url = 'portfolio/'+this.$route.params.PortfolioId;
            console.log(url);
            var resource = this.$resource(url);
            resource.get({}, function(portfolio){
                console.log(portfolio);
                this.portfolio = portfolio;
                NProgress.done();
            });

        }
    },


})

var Hell = Vue.extend({
    template: '#hellTPL',
    created:  function(){ NProgress.start(); },
    ready: function(){ NProgress.done(); },

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
    data: function(){
        return  data;
    },
    ready: function(){
        // alert(this.call);
    },
     methods: {
        toggleCall: function(){
            alert("12");
            if (this.call){ this.call = false;}
            else { this.call = true; }
        }
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
    '/portfolioItem/:PortfolioId': {
        name: 'portfolioItem',
        component: PortfolioItem
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