
// redux actions function
export const actions = {
  addFruit : (name, tag, img)=>{
    return {
      type: 'ADD',
      name: name,
	    tag: tag,
    };
  },
  delFruit : (index)=>{
    return {
      type: 'DEL',
      index: index
    };
  },
  doneFruit : (index)=>{
    return {
      type: 'DONE',
      index: index
    };
  }
}
