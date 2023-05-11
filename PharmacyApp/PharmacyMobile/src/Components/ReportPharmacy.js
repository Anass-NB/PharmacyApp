import { useEffect, useState } from "react";
import { Alert, Button, View } from "react-native";
import axios from "axios";
import { IP_ADDRESS } from "@env";

const showMessage = (message) => {
  Alert.alert(
    'Message',
    message,
    [{ text: 'OK' }]
  );
}
const ReportPharmacy = (props) => {
  const [ip, setIP] = useState("");

  const requestOptions = {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ ipAddress: ip, pharmacyId: props.id })
  };

  //Get ip address of user
  const getIpAddress = async () => {
    const res = await axios.get("https://api.ipify.org/?format=json");
    console.log(res.data);
    setIP(res.data.ip);
  };
  useEffect(() => {
    getIpAddress();
  }, []);
  //Send request 
  const sendRequest = async () => {
    const endPoint = `http://${IP_ADDRESS}:8000/api/store-user-report`;
    try {
      await fetch(endPoint, requestOptions)
        .then(response => {
          if (response.ok) {
            response.json().then(data => {
              const { status, message } = data;
              showMessage(message);
            })
          }
        })
    }
    catch (error) {
      console.error(error);
    }
  }
  return (
    <View>
      <Button
        onPress={sendRequest}
        title={"déclarer cette pharmacie en permanence"}
        color="#03C988" />

    </View>
  );
}

export default ReportPharmacy;