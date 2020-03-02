
import React from 'react'

export default class Home extends React.Component {
  render() {
    return (
        <div>
        {this.props.items.map((item) =>
            <div className="md:flex">
                <div className="md:flex-shrink-0">
                <img className="rounded-lg md:w-56" src={ item.url } alt="Woman paying for a purchase"/>
  </div>
  <div className="mt-4 md:mt-0 md:ml-6">
    <div className="uppercase tracking-wide text-sm text-indigo-600 font-bold"> {item.name}  </div>
    <a href="#" className="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline">Finding customers for your new business</a>
    <p className="mt-2 text-gray-600">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
  </div>
</div>
            )}
    </div>
    );
  }
}
