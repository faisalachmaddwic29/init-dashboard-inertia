import { defineStore } from "pinia";
import { ref } from "vue";

export const useColumnStore = defineStore("column", () => {
    const column = ref(3);

    const changeColumn = (index) => (column.value = index);

    return { column, changeColumn };
});

// export const useColumnStore = defineStore("columnStore", {
//     state: () => ({ column: 3 }),
//     actions: {
//         changeColumn: (index) => {
//             console.log(this.column === 1);
//             this.column = index;
//         },
//     },
// });
