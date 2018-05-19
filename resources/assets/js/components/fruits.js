// import React, { Component } from 'react';
// import ReactDOM from 'react-dom';
 
// /* An example React component */
// class Fruits extends Component {
//     render() {
//         return (
//             <div>
//                 <h3>All Products</h3>
//             </div>
//         );
//     }
// }
 
// export default Fruits;
 
// /* The if statement is required so as to Render the component on pages that have a div with an ID of "root";  
// */
 
// if (document.getElementById('root')) {
//     ReactDOM.render(<Fruits />, document.getElementById('root'));
// }



import React from 'react';
import ReactDOM from 'react-dom';
import '../../static/css/index.css';
import { reducer }     from '../reducer/reducer';
import { MyApp }       from './App';
import { Provider }    from 'react-redux';
import { createStore } from 'redux';

const store = createStore(reducer);
ReactDOM.render(
  <Provider store={store}>
    <MyApp />
  </Provider>,
  document.getElementById('root')
)


