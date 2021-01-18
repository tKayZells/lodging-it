<template>
    <li class="flex justify-between bg-gray-700 text-white text-sm p-4 m-2 rounded-lg relative group hover:bg-gray-300"> 
        <p>{{ file.name }}</p>
        <p>{{ FormatSize( file.size ) }}</p>
        <a class="cursor-pointer absolute left-1/2 text-gray-700 -z-10 group-hover:z-10"><i class="fas fa-trash fa-2x"></i></a>
    </li>
</template> 
<script>
export default {
    props: [ "file" ],
    mounted(){
        console.log("mounted file row");
    },
    methods: {
        FormatSize( size ){
            return size > 1024 ? 
                        size > 1048576 ? Math.round(size / 1048576) + "mb" : Math.round(size / 1024) + "kb"
                    : file.size + "b";
        }
    }
}
</script>