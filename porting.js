const fs = require('fs');
const originalData = require("./OriginalDataset.json");

// Start benchmark
console.time("Execution Time");

const filteredData = {
    users: [],
}

for (let i = 0; i < originalData.data.length; i++) {
    const user = originalData.data[i]

    const newUserData = {}
    newUserData.age = user.age_1a_q_1 ?? null
    newUserData.gender = user.gender_T1_M ?? null
    newUserData.weight = user.bodyweight_kg_all_m_1_T1_M ?? null
    newUserData.height = user.bodylength_cm_all_m_1_T1_M ?? null
    newUserData.depression = user.depression_followup_adu_q_1_T3_Q1 ?? null
    newUserData.burnout = user.burnout_followup_adu_q_1_T3_Q1 ?? null
    newUserData.alchohol_intake = user.alcohol_intake_adu_c_1_T1_QF ?? null

    if (newUserData.age) {
        newUserData.age = newUserData.age / 12
    }

    filteredData.users.push(newUserData)
}

fs.writeFileSync("output.json", JSON.stringify(filteredData, null, 2));

// End benchmark
console.timeEnd("Execution Time");
