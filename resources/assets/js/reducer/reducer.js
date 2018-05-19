
const initStatus = {
            fruits: []
        };

export function reducer(state = initStatus, action) {
	var newFruits = []
    switch (action.type) {
        case 'ADD':
            let newFruit = {
                name: action.name,
				tag: action.tag,
				index: Date.now(),
                status: "normal",
            };
			newFruits = [...state.fruits, newFruit];
            state = Object.assign({}, state, {fruits:newFruits});
            break;
        case 'DEL':
			// action should have an fruit index
			newFruits = [...state.fruits].filter((item)=>item.index !== action.index);
            state = Object.assign({}, state, {fruits: newFruits});
            break;
        case 'DONE':
			// action should have an fruit index
			newFruits = [...state.fruits].map((item)=>{
				if(item.index === action.index){
					item.status = 'done';
				}
				return item;
			})
            state = Object.assign({}, state, {fruits:newFruits});
            break;
        default:
            break;
    }
    return state;
}
