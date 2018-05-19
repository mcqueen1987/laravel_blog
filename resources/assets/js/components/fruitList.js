import React, { Component } from 'react';
import '../../static/css/fruitList.css';
import bin_img     from '../../static/img/bin.png'
import done_img    from '../../static/img/done.png'
import save_img    from '../../static/img/save.png'
import cancel_img  from '../../static/img/cancel.png'
import { actions } from '../actions/action';
import { connect } from 'react-redux'

class FruitItem extends Component{ //
	constructor(props){
		super(props);
		this.edit = this.edit.bind(this);
		this.del = this.del.bind(this);
		this.done = this.done.bind(this);
		this.save = this.save.bind(this);
		this.cancel = this.cancel.bind(this);
		this.remove = this.remove.bind(this);
		this.onChange = this.onChange.bind(this);
		this.getButtonStatus = this.getButtonStatus.bind(this);
		this.fruitId = this.props.fruitId;  //
		this.fruit = this.props.fruit;
		this.inputText = "";
		this.state = {
			fruitId: this.fruitId,
			fruit: this.fruit
		}
	}
	
	edit(){
		this.fruit.status = 'editing';  // status ?????
		this.inputText = this.fruit.name;
		this.setState({fruit: this.fruit});
	};

	del(){
		this.props.delFruit(this.fruitId);
	}

	done(){
		this.fruit.status = 'done';
		this.setState({fruit: this.fruit});
		this.props.doneFruit(this.fruitId);
	};

	save(){
		this.fruit.status = 'normal';
		this.fruit.name = this.inputText;
		this.setState({fruit: this.fruit});
	};

	cancel(){
		this.fruit.status = 'normal';
		this.setState({fruit: this.fruit});
	};

	remove(){
		this.props.onDelete(this.fruitId);
	};

	onChange(e){
		this.inputText = e.target.value;
	}

	getButtonStatus(){
		switch(this.fruit.status){
			case 'editing':
				return {
					input: true, //enable input 
					cancel: true,
					save: true
				};
			case 'done':
				return {
					pdisable: true, // show text
				};
			default:
				return {
					p: true, // show text
					done: true,
					del: true
				};
		}
	}

	render(){
		// all DOM items, one status contains multi Dom items
		const {input, p, pdisable, done, save, cancel, del} = this.getButtonStatus();
		var class_name = "class-eventList " + this.fruit.status;
		return (<li className="list-group-item list-group-item-info fruit-item">
					<div className={class_name}>
						{input && <input onChange={this.onChange} defaultValue={this.fruit.name}></input>}
						{p && <p onClick={this.edit}>{this.fruit.name}</p>}
						{pdisable && <p>{this.fruit.name}</p>}
						{done && <img className="btn-done" onClick={this.done} id='btn-done' src={done_img} alt="done" />}
						{cancel && <img className="btn-cancel" onClick={this.cancel} id='btn-cancel' src={cancel_img} alt="cancel" />}
						{save && <img className="btn-save" onClick={this.save} id='btn-save' src={save_img} alt="save" />}
						{del && <img className="btn-delete" onClick={this.del} id='btn-delete' src={bin_img} alt="delete" />}
					</div>
				</li>);

	}
}

//
const fruitIteMapDispatchToProps = (dispatch, ownProps) => {
	return {
		delFruit:  (fruitKey) => dispatch(actions.delFruit(fruitKey)),
		doneFruit: (fruitKey) => dispatch(actions.doneFruit(fruitKey)),
	}
};
const MyFruitItem = connect(()=>{return {};}, fruitIteMapDispatchToProps)(FruitItem);

export class FruitList extends Component {
	constructor(props){
		super(props);
		this.buildFruitItems = this.buildFruitItems.bind(this);
	}

	buildFruitItems(){
		return this.props.fruits
			.filter((item)=>item.tag===this.props.tag)
			.map((item)=>{
				return  (<MyFruitItem key={item.index} fruitId={item.index} fruit={item} />);
			});
	}

	render() {
		//point to address, contents could be modified but can not assigned
		const fruits = this.buildFruitItems();
		return (
				<div className="container">
					<ul className="list-group text-center">
						{fruits}
					</ul>
				</div>
			   );
	}
};



















