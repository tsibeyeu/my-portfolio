import { useState } from "react";

const initialFriends = [
  {
    id: 118836,
    name: "Clark",
    image: "https://i.pravatar.cc/48?u=118836",
    balance: -7,
  },
  {
    id: 933372,
    name: "Sarah",
    image: "https://i.pravatar.cc/48?u=933372",
    balance: 20,
  },
  {
    id: 499476,
    name: "Anthony",
    image: "https://i.pravatar.cc/48?u=499476",
    balance: 0,
  },
];
export default function App() {
  const [show, setShow] = useState(false);
  const [friend, setFriend] = useState(initialFriends);
  const [selectFriend, setSelectFriend] = useState();
  function handleShow() {
    setShow(!show);
  }
  function HandleAddFreind(newfriend) {
    setFriend((friend) => [...friend, newfriend]);
  }
  function Selection(friend) {
    // setSelectFriend(friend);
    setSelectFriend((cur) => (cur?.id === friend.id ? "null" : friend));
    setShow(false);
  }
  function handleSpiltBill(value) {
    console.log(value);
    setFriend((friends) =>
      friends.map((friend) =>
        friend.id === selectFriend.id
          ? { ...friend, balance: friend.balance - value }
          : friend
      )
    );
  }

  return (
    <div className="app">
      <div className="sidebar">
        <FriendsList
          friend={friend}
          onselection={Selection}
          selectFriend={selectFriend}
        />
        {show ? (
          <FormAddFriend
            onhandleAddFreind={HandleAddFreind}
            onhandleShow={handleShow}
          />
        ) : (
          ""
        )}

        <Button onClick={handleShow}>{show ? "Close" : "Add friend"}</Button>
      </div>

      {selectFriend && (
        <FormSpiltBill
          selectedFriend={selectFriend}
          onhandleSpiltBill={handleSpiltBill}
        />
      )}
    </div>
  );
}
function FriendsList({ friend, onselection, selectFriend }) {
  return (
    <ul>
      {friend.map((friend) => (
        <Friends
          friend={friend}
          key={friend.id}
          onselection={onselection}
          selectFriend={selectFriend}
        />
      ))}
    </ul>
  );
}
function Friends({ friend, onselection, selectFriend }) {
  const isSelect = friend?.id === selectFriend?.id;
  return (
    <li className={isSelect ? "selected" : ""}>
      <img src={friend.image} alt="girl with hat"></img>
      <h3>{friend.name}</h3>
      {friend.balance < 0 && (
        <p className="red">
          you owe {friend.name} ${Math.abs(friend.balance)}
        </p>
      )}
      {friend.balance > 0 && (
        <p className="green">
          {friend.name} owes you ${friend.balance}
        </p>
      )}
      {friend.balance === 0 && <p> you and {friend.name} are even</p>}
      <Button onClick={() => onselection(friend)}>
        {isSelect ? "Close" : "Select"}
      </Button>
    </li>
  );
}
function Button({ children, onClick }) {
  return (
    <button className="button" onClick={onClick}>
      {" "}
      {children}
    </button>
  );
}
function FormAddFriend({ onhandleAddFreind, onhandleShow }) {
  const [name, setName] = useState();
  const [image, setImage] = useState("https://i.pravatar.cc/48");
  function handleSubmit(e) {
    e.preventDefault();
    if (!name || !image) return;
    const id = crypto.randomUUID();
    const newFriend = {
      name,
      balance: 0,
      image: `${image}=${id}`,
      id,
    };
    onhandleAddFreind(newFriend);
    onhandleShow(false);
    setName("");
    setImage("https://i.pravatar.cc/48");
  }
  return (
    <form className="form-add-friend" onSubmit={(e) => handleSubmit(e)}>
      <label>Freind Name</label>
      <input
        type="text"
        value={name}
        onChange={(e) => setName(e.target.value)}
      />
      <label>Image URL </label>
      <input
        type="text"
        value={image}
        onChange={(e) => setImage(e.target.value)}
      ></input>
      <Button>Added</Button>
    </form>
  );
}
function FormSpiltBill({ selectedFriend, onhandleSpiltBill }) {
  const [bill, setBill] = useState("");
  const [paidUser, setPaidUser] = useState("");
  let paidFriend = bill ? bill - paidUser : "";
  const [whoIsPaying, setWhoIsPaying] = useState("user");
  function onSubmitSpilt(e) {
    e.preventDefault();
    if (!bill || !paidUser) return;
    onhandleSpiltBill(whoIsPaying === paidUser ? paidFriend : -paidFriend);
  }

  return (
    <form className="form-split-bill" onSubmit={(e) => onSubmitSpilt(e)}>
      <h2>Spilt a bill with {selectedFriend.name}</h2>

      <label>Bill value</label>
      <input
        type="text"
        value={bill}
        onChange={(e) => setBill(Number(e.target.value))}
      ></input>
      <label>Your expense </label>
      <input
        type="text"
        value={paidUser}
        onChange={(e) =>
          setPaidUser(
            Number(e.target.value) > bill ? paidUser : Number(e.target.value)
          )
        }
      ></input>
      <label>{selectedFriend.name}'s expense</label>
      <input type="text" disabled value={paidFriend}></input>
      <label>Who is paying the bill</label>
      <select
        value={whoIsPaying}
        onChange={(e) => setWhoIsPaying(e.target.value)}
      >
        <option value="user">You</option>
        <option value="friend">{selectedFriend.name}</option>
      </select>
      <Button>Spilt bill</Button>
    </form>
  );
}
