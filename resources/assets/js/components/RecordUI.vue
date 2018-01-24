<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <ul id="example-2">
                <li v-for="(item, index) in items">
                  {{ parentMessage }} - {{ index }} - {{ item.message }}
                </li>
              </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }



</script>
