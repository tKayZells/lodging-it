<template>
    <form method="POST" :action="action" enctype="multipart/form-data" >
        <slot>
         <!-- CSRF gets injected into this slot -->
        </slot>
        <input type="hidden" name="id" :value="id" />
        <div class="flex flex-col-reverse md:grid md:grid-cols-4 md:gap-6 p-4 m-2">
            <div class="md:col-span-2 p-4 m-2 border rounded-md">
                <p v-if="files.length == 0" class="text-sm text-center text-gray-600">No files to upload</p>
                <ul>
                    <file-row-component v-for="(file, idx) in files" v-bind:key="idx" :file="file" ></file-row-component>
                </ul>
            </div>
            <div class="md:col-span-1 py-4 m-2">
                <div class="p-0">
                    <input ref="images" type="file" name="images[]" multiple class="hidden" @change="OnImagesChange" />
                    <a id="image_popup" class="px-4 py-2 bg-gray-700 text-white rounded-md transition duration-400 ease hover:bg-gray-500 cursor-pointer" @click="ShowSelectImages">
                        <i class="far fa-folder-open mr-2"></i>
                        Select Files
                    </a>
                </div>
            </div>
        </div>
        <button type="submit" class="px-4 py-2 bg-gray-700 text-white rounded-md transition duration-400 ease hover:bg-gray-500 mr-2">
            Add Images
        </button>
    </form>
</template>

<script>
import FileRowComponent from "./FileRowCommponent.vue";
  export default {
    props:[ "action", 'id' ],
    components : {
        FileRowComponent
    },
    data() {
        return {
            files: [],
        }
    },
    mounted() {
      console.log("Example component mounted");
    },
    methods: {
        OnImagesChange(e) {
            for (const file of e.target.files) {
                this.files.push(file);
            }
        },
        ShowSelectImages(e) {
            this.$refs.images.click();
        }
    }
  };
</script>