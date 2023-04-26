import { Button, Text, View } from "react-native";

const Test = ({ navigation }) => {
  // const { lat,long } = route.params;

  return (
    // <Text> lat:  {lat} , long {long}</Text>
    <View>
      <Text style={{ margin: 50 }}>Test 1 page</Text>
      <Button
        title="Go to About"
        onPress={() => navigation.navigate("Test2")} />
    </View>

  );
}

export default Test;