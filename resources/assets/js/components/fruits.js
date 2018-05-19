
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


