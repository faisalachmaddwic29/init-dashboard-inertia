import { defineStore } from "pinia";
import { ref } from "vue";

export const useColumnStore = defineStore("column", () => {
    const column = ref(4);

    const changeColumn = (index) => {
        column.value = index;

        console.log('ini');
        console.log(column.value === 1);
        console.log(column.value === 2);
        console.log(column.value === 3);
        console.log(column.value === 4);
        console.log('jlana');
    };

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
