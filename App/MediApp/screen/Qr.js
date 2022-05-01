import QRCode from "react-native-qrcode-svg";
import { View, Text, TouchableOpacity, StyleSheet } from "react-native";

const patientIdentifier = "#65db9c";

export default function Qr({ navigation }) {
  return (
    <View style={{ flex: 1, justifyContent: "center", alignItems: "center" }}>
      <View style={styles.header}>
        <Text
          style={{
            fontSize: 40,
            color: "#fff",
            fontWeight: "bold",
            marginBottom: 20,
            textAlign: "center",
            marginTop: 10,
          }}
        >
          Scan this:
        </Text>
      </View>

      <QRCode value={patientIdentifier} size={300} />
      <TouchableOpacity
        onPress={() => navigation.goBack("Home")}
        style={styles.loginBtn}
      >
        <Text style={styles.loginText}>Go back</Text>
      </TouchableOpacity>
    </View>
  );
}

const styles = StyleSheet.create({
  loginBtn: {
    width: "80%",
    borderRadius: 25,
    height: 50,
    alignItems: "center",
    justifyContent: "center",
    marginTop: 40,
    backgroundColor: "#000",
  },

  loginText: {
    color: "#fff",
  },
  header: {
    backgroundColor: "#000",
    marginBottom: 30,
    width: 250,
    borderRadius: 20,
  },
});
