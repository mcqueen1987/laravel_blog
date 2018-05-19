import React, { Component } from 'react';
import { connect }    from 'react-redux';
import { actions }    from '../actions/action';
import { FruitPanel } from './fruitPanel';
import '../../static/css/App.css';

class App extends Component {
	constructor(props){
		super(props);
		this.cards = [
			"happy",
			"wondering",
			"worry",
		];
	}

	sum(fruits, tag, status){
		let group = fruits.filter((item)=>item.tag === tag);
		return status ? group.filter((item)=>item.status === status).length : group.length;
	}

	render(){
		const {fruits, addFruit} = this.props;
		return (
			<div className="row">
				{
					this.cards.map(obj => {
						var class_name = "component-wrapper component-" + obj;
						return (
							<div className={class_name} key={obj}>
								<div className="sum-data">
									<div>  total  {this.sum(fruits, obj)} , done {this.sum(fruits, obj, 'done')} </div>
								</div>
								<FruitPanel addFruit={addFruit} fruits={fruits} tag={obj}/>
							</div>
						);
					})
				}
			</div>
		);
	};
}

const mapStateToProps = (state) => {
	return state;
};

//binding dispatch of redux to dispatch of native react
const mapDispatchToProps = (dispatch, ownProps) => {
	return {
    	addFruit: (...args) => dispatch(actions.addFruit(...args)),
		delFruit: (...args) => dispatch(actions.delFruit(...args)),
	}
};

//binding redux data to native react 
export const MyApp = connect(mapStateToProps, mapDispatchToProps)(App);
