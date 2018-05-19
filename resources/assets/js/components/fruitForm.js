import React, { Component } from 'react';
import '../../static/css/fruitForm.css';
import happyFace     from '../../static/img/happy.png' // if from default exports, we dont need to use brace
import wonderingFace from '../../static/img/wondering.png'
import worryFace     from '../../static/img/worry.png'
import { InputFrom } from '../../static/html/inputFrom';

export class FruitForm extends Component {
	constructor(props){
		super(props);
		this.createFruit = this.createFruit.bind(this); //in=>anonimous function will define in every render; usually bnid it in constructor to avoid performance issues;
	}
	createFruit(e){
		//defaunt action of onSubmit event will not be triggered
		e.preventDefault();
		var fruit = this.refs.fruitName.value;
		if(typeof fruit === 'string' && fruit.length > 0) {
			this.props.addFruit(fruit, this.props.tag);
			// get ref from this.refs.name_of_ref
			this.refs.fruitForm.reset();
		}
	};
	render(){
		const {tag} = this.props;
		let img = "";
		switch(tag){
			case "happy" :
				img = happyFace;
				break;
			case "wondering" :
				img = wonderingFace;
				break;
			case "worry" :
				img = worryFace;
				break;
			default :
				img = happyFace;
		}
		return(
			// define ref to form
			// <button type="submit" id="page-wrap" className="btn btn-primary btn-add">Add</button>
			<form className="form-inline" ref="fruitForm" onSubmit={this.createFruit}>
				<div className="form-group">
  					<img className="img-hint" alt="happy icon mage" src={`${img}`}/>
					<div className="main">
						<input type="text" id="sidebar" className="input-text" placeholder={`    I am ${tag} that ...`} ref="fruitName"/>
						<InputFrom/>
					</div>
				</div>
			</form>
		)
	}
};
















