<template>
    <div>
        <div class="card mb-2" v-for="article in articles" v-bind:key="article.id">
            <div class="card-body ">
                <h4 class="card-title">{{ article.title }}</h4>
                <div class="card-img"><img src="{{ article.img }}"/></div>
                <p class="card-text">{{article.description }}</p>
            </div>
        </div>

        <nav>
            <ul class="pagination justify-content-center">
                <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
                    <a class="page-link" href="#" @click="getArticles(pagination.prev_page_url)">Previous</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">{{ pagination.current_page }} of {{ pagination.last_page }}</a>
                </li>
                <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
                    <a class="page-link" href="#" @click="getArticles(pagination.next_page_url)">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                articles: []
            };
        },

        created() {
            this.getArticles();
        },

        methods: {
            getArticles(api_url) {
                api_url = api_url || '/api/articles';
                fetch(api_url)
                    .then(response => response.json())
                    .then(response => {
                        this.posts = response.data;
                    })
                    .catch(err => console.log(err));
            }
        },

            paginator(meta, links) {
                this.pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev
                };
            },
    };
</script>